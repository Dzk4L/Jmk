<?php
include('config1.php'); // Mengimpor file koneksi ke database

if(isset($_GET['edit'])) {
    $usernameToEdit = $_GET['edit'];
    $sqlEdit = "SELECT * FROM user WHERE username = '$usernameToEdit'";
    $resultEdit = mysqli_query($koneksi, $sqlEdit);
    $dataEdit = mysqli_fetch_assoc($resultEdit);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <link href="style1.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Edit Siswa</h2>
    <form action='' method='POST'>
        <input type='hidden' name='edit_username' value='<?php echo $dataEdit['username']; ?>'>
        <div class='mb-3'>
            <label for='edit_password' class='form-label'>Kata Sandi:</label>
            <input type='text' id='edit_password' name='edit_password' class='form-control' value='<?php echo $dataEdit['password']; ?>' required>
        </div>
        <div class='mb-3'>
            <label for='edit_umur' class='form-label'>Usia:</label>
            <input type='number' id='edit_umur' name='edit_umur' class='form-control' value='<?php echo $dataEdit['umur']; ?>' required>
        </div>
        <div class='mb-3'>
            <label for='edit_nama' class='form-label'>Nama:</label>
            <input type='text' id='edit_nama' name='edit_nama' class='form-control' value='<?php echo $dataEdit['nama']; ?>' required>
        </div>
        <button type='submit' name='update' class='btn btn-primary'>Update Data</button>
    </form>
</div>
</body>
</html>

<?php
}
?>
