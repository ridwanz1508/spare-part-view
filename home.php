<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Denso Crafting the Core</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .content {
            text-align: left;
            padding: 20px;
        }

        .upload-section {
            text-align: left;
        }

        .custom-file-upload {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            text-decoration: none; 
        }


        .file-input {
            display: none;
        }

        .upload-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            width: 200px;
            border: none;
            letter-spacing: 2px;
        }

        /* Hover styles for buttons */
        .custom-file-upload:hover, .upload-button:hover {
            background-color: #1e6dbb;
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
                const gridContainer = document.querySelector(".grid-container");

                if (sidebar.classList.contains("collapsed")) {
                    sidebar.classList.remove("collapsed");
                    content.classList.remove("expanded");
                    gridContainer.classList.remove("expanded");
                } else {
                    sidebar.classList.add("collapsed");
                    content.classList.add("expanded");
                    gridContainer.classList.add("expanded");
                }
            });
        </script>
    </div>

    <!-- the Content-Upload File -->
    <div class="content">
        <h2>UPLOAD YOUR EXCEL FILE</h2>
        <div id="message-container">
            <!-- Success or failure message will be displayed here -->
        </div>
        <form id="upload-form" action="config/get_home.php" method="post" enctype="multipart/form-data">
            <div class="upload-section">
                <label for="excel_file" class="custom-file-upload">
                    <i class="fa fa-cloud-upload"></i> Choose File
                </label>
                <input type="file" id="excel_file" name="excel_file" class="file-input" onchange="displayFileName(this)">
                <span id="file-name" class="selected-file">No file selected</span>
                <button type="submit" class="upload-button" name="upload">Upload File</button>
            </div>
        </form>
    </div>

    <script>
        function displayFileName(input) {
            const fileNameDisplay = document.getElementById('file-name');
            
            if (input.files.length > 0) {
                fileNameDisplay.textContent = input.files[0].name;
            } else {
                fileNameDisplay.textContent = 'No file selected';
            }
        }

        document.getElementById("upload-button").addEventListener("click", function (e) {
            e.preventDefault();
            const form = document.getElementById("upload-form");
            const messageContainer = document.getElementById("message-container");

            const formData = new FormData(form);

            // Kirim form secara asinkron menggunakan fetch
            fetch("config/get_home.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                // Tampilkan pesan hasil di dalam messageContainer
                messageContainer.innerHTML = data;
            })
            .catch(error => {
                console.error("Error:", error);
            });
        });
    </script>



</body>
</html>





