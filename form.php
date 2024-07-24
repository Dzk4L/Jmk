<?php
include('config1.php'); // Mengimpor file koneksi ke database

// Memproses penambahan data jika formulir dikirimkan
if (isset($_POST['submit'])) { // Memeriksa apakah formulir telah dikirimkan
    $username = $_POST['username']; // Mengambil nilai inputan "username" dari formulir
    $password = $_POST['password']; // Mengambil nilai inputan "password" dari formulir
    $umur = $_POST['umur']; // Mengambil nilai inputan "umur" dari formulir
    $nama = $_POST['nama']; // Mengambil nilai inputan "nama" dari formulir

    // Pastikan koneksi ke database sudah diinisialisasi dengan benar sebelumnya

    // Memasukkan data input ke dalam database
    $sql1 = "INSERT INTO user (username, password, umur, nama) VALUES ('$username', '$password', '$umur', '$nama')";
    $q1 = mysqli_query($koneksi, $sql1); // Menjalankan query untuk memasukkan data ke dalam tabel

    if ($q1) { // Jika query berhasil dieksekusi
        $sukses = "Berhasil memasukkan data baru"; // Pesan sukses
        echo ("<script>alert('$sukses');</script>"); // Tampilkan pesan sukses dalam bentuk alert JavaScript
    } else { // Jika query gagal dieksekusi
        $error = "Gagal memasukkan data"; // Pesan error
        echo ("<script>alert('$error');</script>"); // Tampilkan pesan error dalam bentuk alert JavaScript
    }
}

// Query SQL untuk mengambil semua data dari tabel
$sql = "SELECT * FROM user"; // Query SQL untuk mengambil semua data dari tabel "user"
$result = mysqli_query($koneksi, $sql); // Menjalankan query untuk mengambil data dari tabel

// Cek jika query berhasil dijalankan
if (!$result) { // Jika query gagal dijalankan
    die("Query gagal: " . mysqli_error($koneksi)); // Tampilkan pesan error
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>-Data-</title>
    <link href="style1.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<div class="container mt-5">
    <h2 class="mb-4">Daftar Siswa</h2>
    <form action="" method="POST"> <!-- Form untuk menambahkan data -->
        <div class="mb-3">
            <label for="username" class="form-label">Nama Lengkap:</label>
            <input type="text" id="username" name="username" class="form-control" required>
            <!-- Input untuk username -->
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Kata Sandi:</label>
            <input type="text" id="password" name="password" class="form-control" required>
            <!-- Input untuk password -->
        </div>

        <div class="mb-3">
            <label for="umur" class="form-label">Umur:</label>
            <input type="number" id="umur" name="umur" class="form-control" required> <!-- Input untuk umur -->
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Panggilan:</label>
            <input type="text" id="nama" name="nama" class="form-control" required> <!-- Input untuk nama -->
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
        <!-- Tombol untuk mengirimkan formulir -->
    </form>
</div>

<div class="container mt-5">
    <h2 class="mb-4">Daftar Siswa</h2>
    <table class="table"> <!-- Tabel untuk menampilkan data -->
        <thead>
        <tr>
            <th>Nama Lengkap</th>
            <th>Kata Sandi</th>
            <th>Umur</th>
            <th>Nama Panggilan</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // Loop untuk menampilkan data dari hasil query
        while ($row = mysqli_fetch_assoc($result)) {
            // ...
            echo "<tr>";
            echo "<td>" . $row['username'] . "</td>"; // Menampilkan data username
            echo "<td>" . $row['password'] . "</td>"; // Menampilkan data password
            echo "<td>" . $row['umur'] . "</td>"; // Menampilkan data umur
            echo "<td>" . $row['nama'] . "</td>"; // Menampilkan data nama
            echo "<td><a href='edit.php?edit=" . $row['username'] . "' class='btn btn-warning mx-1 '>Edit</a><a href='?delete=" . $row['username'] . "' class='btn btn-danger mx-1'>Delete</a></td>"; // Tombol Edit

            echo "</tr>";
        }

        // ..
        
        if (isset($_GET['delete'])) {
            $usernameToDelete = $_GET['delete'];
            $sqlDelete = "DELETE FROM user WHERE username = '$usernameToDelete'";
            $qDelete = mysqli_query($koneksi, $sqlDelete);
            if ($qDelete) {
                header("Location: form.php"); // Redirect ke halaman yang sama setelah menghapus
            }
        }

        // Bebaskan hasil query
        mysqli_free_result($result);
        ?>
        </div>
        </tbody>
    </table>
</div>

</body>

</html>
