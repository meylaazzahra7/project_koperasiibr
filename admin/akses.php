<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KOPKAR IBR - Akses</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f8f9fa;
    }

    /* Sidebar */
    .sidebar {
      width: 250px;
      height: 100vh;
      background: linear-gradient(#028a3dc2, #028a3d);
      position: fixed;
      top: 0; left: 0;
      padding-top: 20px;
      color: #fff;
      transition: transform 0.3s ease;
      z-index: 1000;
    }
    .sidebar.collapsed { transform: translateX(-100%); }
    .sidebar h2 {
      font-size: 20px;
      text-align: center;
      margin-bottom: 30px;
    }
    .sidebar a {
      display: block;
      padding: 12px 20px;
      color: #fff;
      text-decoration: none;
      transition: 0.3s;
    }
    .sidebar a:hover, .sidebar a.active {
      background: limegreen;
      border-radius: 6px;
    }
    .brand-title {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
    }
    .brand-title .logo {
      width: 50px;
      height: 50px;
      border-radius: 50%;
    }

    /* Navbar */
    .navbar-custom {
      margin-left: 250px;
      background: linear-gradient(#028a3dc2, #028a3d);
      color: #fff;
      padding: 10px 20px;
      transition: margin-left 0.3s ease;
    }
    .navbar-custom.collapsed { margin-left: 0; }
    .toggle-btn {
      background: none;
      border: none;
      font-size: 24px;
      color: white;
      cursor: pointer;
      margin-right: 20px;
    }

    /* Content */
    .content {
      margin-left: 250px;
      padding: 20px;
      transition: margin-left 0.3s ease;
    }
    .content.collapsed { margin-left: 0; }

    /* Dashboard Cards */
    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
    }
    .card-box {
      background: #fff;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 3px 6px rgba(0,0,0,0.1);
      text-align: center;
      transition: 0.3s;
    }
    .card-box:hover {
      transform: translateY(-5px);
    }
    .icon-circle {
      width: 50px;
      height: 50px;
      margin: 0 auto 10px;
      border-radius: 50%;
      background: rgba(2,138,61,0.1);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      color: #028a3d;
    }
    .card-box h3 {
      font-size: 1rem;
      color: #333;
      margin-bottom: 5px;
    }
    .card-box p {
      font-size: 1.1rem;
      font-weight: bold;
      color: #028a3d;
      margin: 0;
    }
    .card-box small {
      color: #666;
    }
  </style>
</head>
<body>

    <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <h2 class="brand-title">
      <img src="logo2.png" alt="Logo" class="logo"> KOPKAR IBR
    </h2>
    <a href="dashboard.php">📊 Dashboard</a>
    <a href="akses.php" class="active">🔑 Akses</a>
    <a href="anggota.php">👤 Anggota</a>
    <a href="keanggotaan dan kerjasama.php">💰 Keanggotaan & Mitra..</a>
    <a href="produk.php">📦 Produk</a>
    <a href="keunggulan dan benefit.php">🛍 Keunggulan & Benefit</a>
    <a href="event.php">💹 Event & Media</a>
    <a href="laporan.php">📑 Laporan</a>
    <a href="pengaturan.php">⚙ Pengaturan</a>
    <hr class="text-white">
    <a href="bantuan.php">❓ Bantuan</a>
  </div>

  <!-- Navbar -->
  <nav class="navbar navbar-custom" id="navbar">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center">
        <button class="toggle-btn" id="toggleSidebar">☰</button>
        <form class="d-flex" role="search" style="width: 300px;">
          <input class="form-control me-2" type="search" placeholder="Cari Bantuan">
          <button class="btn btn-light" type="submit">🔍</button>
        </form>
      </div>
      <div>
        🔔 Selamat datang
      </div>
    </div>
  </nav>

  <!-- Content -->
  <div class="content" id="mainContent">
    <h4 class="mb-3">🔑 Akses</h4>
    <div class="alert alert-info">
      Berikut ini adalah halaman pengelolaan data akses. Anda bisa menambahkan data akses baru, melihat detail informasi user, 
      dan melihat riwayat aktivitas user tersebut. Ijin akses dan entitas disesuaikan dengan pengaturan aplikasi.
    </div>

    <!-- Tombol Aksi -->
    <div class="mb-3">
      <button class="btn btn-dark">🔍 Cari</button>
      <button class="btn btn-info">🔎 Filter</button>
      <button class="btn btn-primary">➕ Tambah</button>
    </div>

    <input type="text" id="searchInput" placeholder="Cari data..." class="form-control mb-3">

    <!-- Tabel -->
    <div class="card card-custom p-3">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat & Kontak</th>
            <th>Akses</th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td><a href="#">Desi Ratna Sari</a><br><small>05/02/2023 20:39</small></td>
            <td>📧 desiratnasari@gmail.com <br> 📱 0891112111</td>
            <td><span class="badge bg-success">Admin</span><br><small>Active</small></td>
            <td>
              <button class="btn btn-info btn-sm">🔑</button>
              <button class="btn btn-success btn-sm">✏️</button>
              <button class="btn btn-danger btn-sm">❌</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td><a href="#">Percobaan Ijin Akses</a><br><small>14/01/2023 23:42</small></td>
            <td>📧 percobaan@gmail.com <br> 📱 111234</td>
            <td><span class="badge bg-success">Admin</span><br><small>Active</small></td>
            <td>
              <button class="btn btn-info btn-sm">🔑</button>
              <button class="btn btn-success btn-sm">✏️</button>
              <button class="btn btn-danger btn-sm">❌</button>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td><a href="#">Abang Jado2</a><br><small>14/02/2023 00:07</small></td>
            <td>📧 abangjago@gmail.com <br> 📱 089601154799</td>
            <td><span class="badge bg-warning text-dark">Kasir</span><br><small>Active</small></td>
            <td>
              <button class="btn btn-info btn-sm">🔑</button>
              <button class="btn btn-success btn-sm">✏️</button>
              <button class="btn btn-danger btn-sm">❌</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const toggleBtn = document.getElementById('toggleSidebar');
    const sidebar = document.querySelector('.sidebar');
    const navbar = document.getElementById('navbar');
    const content = document.getElementById('mainContent');

    toggleBtn.addEventListener('click', () => {
      sidebar.classList.toggle('collapsed');
      navbar.classList.toggle('collapsed');
      content.classList.toggle('collapsed');
    });
  </script>
</body>
</html>
