<?php
include '../project.php';
if (isset($_POST['submit'])) {
    $nama = $_POST['nama_mitra'];
    $deskripsi = $_POST['desc_mitra'];

    $logo = $_FILES['logo']['name'];
    $tmp = $_FILES['logo']['tmp_name'];
    $folder = "uploads/mitra/";
    move_uploaded_file($tmp, $folder.$logo);

    $query = "INSERT INTO mitra_kerjasama (nama_mitra, deskripsi, logo) VALUES ('$nama', '$deskripsi', '$logo')";
    mysqli_query($conn, $query);

    header("Location: mitra_list.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mitra</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f4f6f9; }
        .wrapper { display: flex; }
        .sidebar { width: 220px; background: #2e7d32; color: white; height: 100vh; padding: 20px; }
        .sidebar h3 { text-align: center; margin-bottom: 20px; }
        .sidebar ul { list-style: none; padding: 0; }
        .sidebar ul li { margin: 15px 0; }
        .sidebar ul li a { color: white; text-decoration: none; display: block; padding: 8px; border-radius: 5px; }
        .sidebar ul li a:hover { background: #1b5e20; }
        .content { flex: 1; padding: 20px; }
        form { background: white; padding: 20px; border-radius: 8px; width: 400px; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input, textarea { width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px; }
        .btn-primary { margin-top: 15px; background: #2196f3; color: white; border: none; padding: 10px; border-radius: 5px; cursor: pointer; }
        .btn-primary:hover { background: #1976d2; }
    </style>
</head>
<body>
 <!-- panggil sidebar -->
  <?php include 'sidebar.php'; ?>

  <!-- CONTENT -->
  <div class="content">
    <!-- HEADER -->
    <div class="header">
      <input type="text" placeholder="Cari Bantuan...">
      <div class="profile">
        <span>🔔</span>
        <img src="https://i.pravatar.cc/100" alt="user">
        <span>Solihul Hadi ▾</span>
      </div>
    </div>
    
<div class="wrapper">
    <div class="sidebar">
        <h3>KOPKAR IBR</h3>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="mitra_list.php">Mitra Kerjasama</a></li>
            <li><a href="keanggotaan_list.php">Keanggotaan</a></li>
        </ul>
    </div>
    <div class="content">
        <h2>Tambah Mitra</h2>
        <form method="post" enctype="multipart/form-data">
            <label>Nama Mitra</label>
            <input type="text" name="nama_mitra" required>
            <label>Deskripsi</label>
            <textarea name="deskripsi"></textarea>
            <label>Logo Mitra</label>
            <input type="file" name="logo" required>
            <button type="submit" name="submit" class="btn-primary">Simpan</button>
        </form>
    </div>
</div>
</body>
</html>
