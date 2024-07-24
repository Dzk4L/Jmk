<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa SDN JMK 48</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SDN JMK 48</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="#home">Home</a>
        <a class="nav-link" href="#">Contact</a>
        <a class="nav-link" href="#">About</a>
        <a button type="button" class="btn btn-outline-success" href="logout.php">Logout</button></a>
      </div>
    </div>
  </div>
</nav>

<div class="bg-image" style="background-image: url('https://cdna.artstation.com/p/assets/images/images/018/325/448/large/timotty-aditya-riyoza-ruangkelas.jpg?1558971329'); background-size: cover; background-repeat: no-repeat; height: 100vh;">
    <div class="container d-flex flex-column justify-content-center align-items-center h-100" id="#home">
        <h1 class="text-black mb-4">Selamat Datang di Sekolah Kami</h1>
        <a href="form.php" class="btn btn-danger btn-lg">Daftar Sekolah</a>
    </div>
</div>

<script src="bootstrap/js/bootstrap.bundle.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
