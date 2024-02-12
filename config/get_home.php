<?php
error_reporting(E_ALL);

require '../vendor/autoload.php'; // Sesuaikan jalur ke autoload.php Anda

use PhpOffice\PhpSpreadsheet\IOFactory;

if (isset($_POST["upload"])) {
    $uploadDirectory = "../uploads/"; // Ubah direktori untuk menyimpan file yang diunggah

    // Periksa apakah file diunggah tanpa kesalahan
    if (isset($_FILES["excel_file"]) && $_FILES["excel_file"]["error"] == 0) {
        $targetFile = $uploadDirectory . basename($_FILES["excel_file"]["name"]);

        // Pindahkan file yang diunggah ke direktori target
        if (move_uploaded_file($_FILES["excel_file"]["tmp_name"], $targetFile)) {
            // Muat file Excel
            $reader = IOFactory::createReader('Xlsx');
            $spreadsheet = $reader->load($targetFile);

            $worksheet = $spreadsheet->getActiveSheet();
            $highestRow = $worksheet->getHighestRow();

            include __DIR__ . '../config/conn.php';

            // Iterasi melalui data Excel dan masukkan ke database
            for ($row = 2; $row <= $highestRow; $row++) {
                $id = null; // ID otomatis, tidak perlu memberikan nilai
                $product = $worksheet->getCell('A' . $row)->getValue();
                $status_line = $worksheet->getCell('B' . $row)->getValue();
                $status_pull = $worksheet->getCell('C' . $row)->getValue();
                $status_delv = $worksheet->getCell('D' . $row)->getValue();
                $information = $worksheet->getCell('E' . $row)->getValue();

                // Masukkan data ke database
                $sql = "INSERT INTO tb_d_plant (product, status_line, status_pull, status_delv, information) VALUES (?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("siiis", $product, $status_line, $status_pull, $status_delv, $information);
                $stmt->execute();
            }

            $stmt->close();
            $conn->close();

            // Arahkan pengguna kembali ke home.php
            header("Location: ../index.php");
            exit(); // Pastikan tidak ada output tambahan yang terjadi setelah mengarahkan

        } else {
            echo "Terjadi kesalahan dalam proses pengunggahan file."; // Pesan kesalahan
        }
    }
}
?>
