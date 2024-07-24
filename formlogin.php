<?php
session_start();
include "config1.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Anda perlu memeriksa apakah username dan password sesuai atau tidak
     $query = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['status'] = "login";
            $_SESSION['nama'] = $username; // Menggunakan username sebagai nama pengguna
            header("Location: main.php");
            exit();
        } else {
            $error = "Username atau password salah";
        }
    } else {
        $error = "Terjadi kesalahan dalam mengakses database: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Here!</title>
    <link href="style3.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="wrapper fadeInDown">
        <div id="formContent">
            <h2 class="tabTitle active"> Login </h2>
            
            <!-- Icon -->
            <div class="fadeIn first">
                <i class="fi fi-brands-html5"></i>
            </div>

            <!-- Login Form -->
            <form method="POST" action="">
                <input type="text" id="username" class="fadeIn second" name="username" placeholder="Username" required >
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>

            <!-- Remind Password -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password?</a>
            </div>

            <?php if (isset($error)) { ?>
                <p class="error"><?php echo $error; ?></p>
            <?php } ?>
        </div>
    </div>
</body>
</html>

