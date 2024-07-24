
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h2>silahkan masuk</h2>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <br>
        <input type="submit" value="login">
    </form>
    <?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Username = $_POST["username"];
    $Password = $_POST["password"];

    $sql = "SELECT * FROM user WHERE username = '$Username' AND password = '$Password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1){
        //login berhasil
        session_start();
        $_SESSION["username"] = $Username;
        header("location: dashboard.php");
    } else {
        $error = "username atau kata sandi salah";
    } 
}
    if (isset($error)) { echo $error; } 
?>

</body>
</html>