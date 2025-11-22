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
    <a href="simpanan.php">💰 Keanggotaan & Mitra Kerjasama</a>
    <a href="pinjaman.php">💳 Pinjaman</a>
    <a href="supplier.php">📦 Supplier</a>
    <a href="barang.php">📦 Barang</a>
    <a href="event.php">💹 Event & Media</a>
    <a href="laporan.php">📑 Laporan</a>
    <a href="pengaturan.php">⚙ Pengaturan</a>
    <a href="aktivitas.php">📝 Aktivitas</a>
    <hr class="text-white">
    <a href="bantuan.php">❓ Bantuan</a>
  </div>