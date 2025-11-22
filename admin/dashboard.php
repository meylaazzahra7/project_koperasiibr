<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KOPKAR IBR - Dashboard</title>
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
    <a href="dashboard.php" class="active">📊 Dashboard</a>
    <a href="akses.php">🔑 Akses</a>
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
  <div class="content" id="content">
    <h4 class="mb-3">📊 Dashboard</h4>
    <p class="text-muted mb-4">Ringkasan Data</p>

    <div class="grid">
      <div class="card-box">
        <div class="icon-circle">🔑</div>
        <h3>Akses</h3>
        <p>16</p>
        <small>User</small>
      </div>
      <div class="card-box">
        <div class="icon-circle">👤</div>
        <h3>Anggota</h3>
        <p>28</p>
        <small>Orang</small>
      </div>
      <div class="card-box">
        <div class="icon-circle">💰</div>
        <h3>Keanggotaan & Mitra Kerjasama</h3>
        <p>14</p>
        <small>Record</small>
      </div>
      <div class="card-box">
        <div class="icon-circle">📦</div>
        <h3>Produk</h3>
        <p>90</p>
        <small>Item</small>
      </div>
        <div class="card-box">
        <div class="icon-circle">🛍</div>
        <h3>Keunggulan & Benefit</h3>
        <p>Rp 8.100.040</p>
      </div>
      <div class="card-box">
        <div class="icon-circle">💹</div>
        <h3>Event & Media</h3>
        <p>63</p>
        <small>Akun</small>
      </div>
     

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const toggleBtn = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');
    const navbar = document.getElementById('navbar');
    const content = document.getElementById('content');

    toggleBtn.addEventListener('click', () => {
      sidebar.classList.toggle('collapsed');
      navbar.classList.toggle('collapsed');
      content.classList.toggle('collapsed');
    });
  </script>
</body>
</html>
