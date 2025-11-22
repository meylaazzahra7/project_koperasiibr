<?php
session_start();
include '../project.php';

// Cek login
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../loginregister.php");
    exit();
}

// Ambil data mitra
$query = "SELECT * FROM mitra_kerjasama ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mitra Kerjasama</title>
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
        h2 { margin-bottom: 20px; }
        .btn { padding: 6px 12px; text-decoration: none; border-radius: 5px; font-size: 14px; }
        .btn-success { background: #4caf50; color: white; }
        .btn-warning { background: #ff9800; color: white; }
        .btn-danger { background: #f44336; color: white; }
        .btn-primary { background: #2196f3; color: white; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; background: white; border-radius: 8px; overflow: hidden; }
        table th, table td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        table th { background: #e0e0e0; }
        img { border-radius: 6px; }
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
    <!-- Sidebar -->
    <div class="sidebar">
        <h3>KOPKAR IBR</h3>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="mitra_list.php">Mitra Kerjasama</a></li>
            <li><a href="keanggotaan_list.php">Keanggotaan</a></li>
        </ul>
    </div>

    <!-- Content -->
    <div class="content">
        <h2>Mitra Kerjasama</h2>
        <a href="mitra_add.php" class="btn btn-success">+ Tambah Mitra</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Logo</th>
                    <th>Nama Mitra</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><img src="uploads/mitra/<?= $row['logo']; ?>" width="80"></td>
                    <td><?= $row['nama_mitra']; ?></td>
                    <td><?= $row['deskripsi']; ?></td>
                    <td>
                        <a href="mitra_edit.php?id=<?= $row['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="mitra_delete.php?id=<?= $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin hapus?');">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
