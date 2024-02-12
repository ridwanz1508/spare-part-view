<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php 
include '../config/conn.php';

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM tb_login WHERE username='$username' AND password = '$password'");
    
    if($query) {
        $user_data = mysqli_fetch_assoc($query);

        // Cek apakah ada data yang cocok
        if($user_data) {
            $num_role = $user_data['num_role'];

            if ($num_role == 1) {
                header("Location: ../index.php");
                exit();
            } else {
                echo "<script>alert('User tidak memiliki akses untuk masuk ke index.php');</script>";
                exit();
            }
        } else {
            echo "<script>alert('Username dan password salah');</script>";
        }
    } else {
        echo "<script>alert('Terjadi kesalahan');</script>";
    }
}
?>

