<?php
session_start();
if (isset($_SESSION['status']) && $_SESSION['status'] === "login") {
    $welcomeMessage = "Selamat datang, " . $_SESSION['nama'] . "!";
    // Clear login satus
    $_SESSION['status'] = "";
} else {
    header("Location: formlogin.php"); // Redirect to login jika belum login
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href=style.css rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <h2>Welcome</h2>
            <p><?php echo isset($welcomeMessage) ? $welcomeMessage : ""; ?></p>
        </div>
    </div>
</body>
</html>
