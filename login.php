
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Denso Crafting the Core</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background: #282828;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card-login {
            width: 500px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            font-size: 20px;
        }

        .card-title {
            text-align: center;
            padding: 20px 0;
            background-color: rgb(19, 110, 170);
            color: #fff;
        }

        .card-title h2 {
            margin: 0;
        }

        .card-content {
            padding: 20px;
        }

        .login-button {
            background-color: rgb(19, 110, 170);
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 10px 5px;
            cursor: pointer;
            border-radius: 5px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .login-button:hover {
            background-color: #555;
        }

        label {
            color: black;
        }

        input {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>
<body>
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <div class="card-login">
        <div class="card-title">
            <i class="fa fa-lock"></i>
            <h2>LOGIN</h2>
        </div>
        <div class="card-content">
            <form action="config/get_login.php" method="POST">
                <label for="username">
                    <i class="fa fa-user"></i>
                    Username :
                </label>
                <input type="text" id="username" name="username" required><br><br>

                <label for="password">
                    <i class="fa fa-key"></i>
                    Password :
                </label>
                <input type="password" id="password" name="password" required><br><br>

                <input type="submit" value="Login" class="login-button">
            </form>
        </div>
    </div>
</body>
</html>
