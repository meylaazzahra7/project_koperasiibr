<?php
session_start();
include "koneksi.php"; // file koneksi ke MySQL

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_anggota    = mysqli_real_escape_string($conn, $_POST['id_anggota']);
    $nama_anggota  = mysqli_real_escape_string($conn, $_POST['nama_anggota']);
    $kontak        = mysqli_real_escape_string($conn, $_POST['kontak_anggota']);
    $email         = mysqli_real_escape_string($conn, $_POST['email_anggota']);
    $password      = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm       = mysqli_real_escape_string($conn, $_POST['confirm']);

    // cek apakah email sudah ada
    $check = mysqli_query($conn, "SELECT * FROM anggota WHERE email_anggota='$email'");
    if (mysqli_num_rows($check) > 0) {
        $error = "Email sudah terdaftar!";
    } elseif ($password !== $confirm) {
        $error = "Password dan konfirmasi password tidak sama!";
    } else {
        // Hash password biar aman
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO anggota (id_anggota, nama_anggota, kontak_anggota, password_anggota, email_anggota) 
                  VALUES ('$id_anggota', '$nama_anggota', '$kontak', '$hashed_password', '$email')";
        if (mysqli_query($conn, $query)) {
            $success = "Registrasi berhasil! Silakan <a href='login.php'>Login</a>.";
        } else {
            $error = "Terjadi kesalahan: " . mysqli_error($conn);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registrasi Anggota</title>
<style>
    body {
    margin: 0;
    font-family: Arial, sans-serif;
    height: 100vh;
    display: flex;
    justify-content: center;   /* posisi horizontal ke tengah */
    align-items: center;       /* posisi vertikal ke tengah */
    background: url('backgroundlogin.png') no-repeat center center fixed;
    background-size: cover;
    position: relative;
}

   body::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 0;   /* biar overlay tetap di belakang */
}
.register-container {
    position: relative;
    z-index: 1;  /* form di atas overlay */
    width: 400px;
    background: rgba(255, 255, 255, 0.95);
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.3);
    text-align: center;
}

    h2 { margin-bottom: 20px; color: #024c27; }
    input {
        width: 100%;
        padding: 12px;
        margin: 8px 0;
        border: 2px solid #028a3d;
        border-radius: 25px;
        outline: none;
        text-align: center;
    }
    input[type="submit"] {
        background: #028a3d;
        color: #fff;
        cursor: pointer;
    }
    input[type="submit"]:hover { background: #026b2f; }
    .error { color: red; margin-top: 10px; }
    .success { color: green; margin-top: 10px; }
    .links { margin-top: 15px; font-size: 14px; }
    .links a { color: #028a3d; text-decoration: none; }
</style>
</head>
<body>
    <div class="register-container">
        <h2>Registrasi Anggota</h2>
        <form method="POST">
            <input type="text" name="id_anggota" placeholder="ID Anggota" required><br>
            <input type="text" name="nama_anggota" placeholder="Nama Lengkap" required><br>
            <input type="text" name="kontak_anggota" placeholder="No. Kontak" required><br>
            <input type="email" name="email_anggota" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="password" name="confirm" placeholder="Konfirmasi Password" required><br>
            <input type="submit" value="Daftar">
        </form>
        <?php if ($error) echo "<p class='error'>$error</p>"; ?>
        <?php if ($success) echo "<p class='success'>$success</p>"; ?>
        <div class="links">
            <a href="login.php">Sudah punya akun? Login</a>
        </div>
    </div>
</body>
</html>
