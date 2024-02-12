<?php
include __DIR__ . '../config/conn.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($conn, "ALTER TABLE `tb_d_plant` AUTO_INCREMENT = 1");
$query = mysqli_query($conn, "SELECT id, product, status_line, status_pull, status_delv, information FROM tb_d_plant");

if (!$query) {
    die("Error: " . mysqli_error($conn));
}

$data = array();
while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
}

mysqli_close($conn);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Denso Crafting the Core</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .circle-icon {
            font-size: 30px;
            width: 0.5em;
            line-height: 0.5em;
        }
    </style>
</head>
<body>
    <!-- The Sidebar -->
    <div class="sidebar">
        <a class="active" href="index.php">
            <h3>Denso Admin Crafting</h3>
        </a>  
        <a href="home.php"><i class="fa fa-fw fa-home"></i>Home</a>
        <a href="services.php"><i class="fa fa-fw fa-wrench"></i>Services</a>
        <a href="contact.php"><i class="fa fa-fw fa-envelope"></i>Contact</a>
        <a href="login.php"><i class="fa fa-fw fa-user"></i>Logout</a>
        <a id="toggle-sidebar" href="#"><i class="fa fa-arrow-left"></i></a>

        <!-- JavaScript -->
        <script>
            document.getElementById("toggle-sidebar").addEventListener("click", function (e) {
                e.preventDefault();
                const sidebar = document.querySelector(".sidebar");
                const content = document.querySelector(".content");

                if (sidebar.classList.contains("collapsed")) {
                    sidebar.classList.remove("collapsed");
                    content.classList.remove("expanded");
                } else {
                    sidebar.classList.add("collapsed");
                    content.classList.add("expanded");
                }
            });
        </script>
    </div>

    <!-- The Content-->
    <div class="content">
        <h2>FAJAR PLANT REALTIME MONITORING</h2>
        <!-- The Table -->
        <table>
            <tr>
                <th rowspan="2">NUMB</th>
                <th rowspan="2">PRODUCT</th>
                <th colspan="3">STATUS</th>
                <th rowspan="2">INFORMATIONS</th>
            </tr>
            <tr>
                <th>LINE</th>
                <th>PULL</th>
                <th>DELV</th>
            </tr>
            <?php foreach ($data as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['product']; ?></td>
                    <td>
                        <span class="circle-icon" style="color: <?php echo $row['status_line'] == 1 ? 'green' : 'red'; ?>">●</span>
                    </td>
                    <td>
                        <span class="circle-icon" style="color: <?php echo $row['status_pull'] == 1 ? 'green' : 'red'; ?>">●</span>
                    </td>
                    <td>
                        <span class="circle-icon" style="color: <?php echo $row['status_delv'] == 1 ? 'green' : 'red'; ?>">●</span>
                    </td>
                    <td><?php echo $row['information']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

</body>
</html>