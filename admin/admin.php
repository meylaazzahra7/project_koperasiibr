<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Koperasi IBR</title>
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

    <!-- GRID CARD -->
    <h1>Dashboard</h1>
    <p style="color:#666; margin-bottom:20px;">Ringkasan Data</p>

    <div class="grid">
      <div class="card">
        <h3>Akses</h3>
        <p>16 User</p>
      </div>
      <div class="card">
        <h3>Anggota</h3>
        <p>28 Orang</p>
      </div>
      <div class="card">
        <h3>Supplier</h3>
        <p>14 Record</p>
      </div>
      <div class="card">
        <h3>Barang</h3>
        <p>90 Item</p>
      </div>
      <div class="card">
        <h3>Akun Keuangan</h3>
        <p>63 Akun</p>
      </div>
      <div class="card">
        <h3>Transaksi</h3>
        <p>19 Record</p>
      </div>
      <div class="card">
        <h3>Penjualan</h3>
        <p>Rp 8.100.040</p>
      </div>
      <div class="card">
        <h3>Pembelian</h3>
        <p>Rp 1.302.524</p>
      </div>
      <div class="card">
        <h3>Simpanan</h3>
        <p>Rp 1.195.000</p>
      </div>
      <div class="card">
        <h3>Pinjaman</h3>
        <p>Rp 3.500.000</p>
      </div>
    </div>
  </div>

</body>
</html>
