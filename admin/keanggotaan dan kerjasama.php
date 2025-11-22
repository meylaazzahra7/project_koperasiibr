<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KOPKAR IBR - Simpanan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f8f9fa;
    }
    .sidebar {
      width: 250px;
      height: 100vh;
      background: linear-gradient(#028a3dc2, #028a3d);
      position: fixed;
      top: 0; left: 0;
      padding-top: 20px;
      color: #fff;
    }
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
    .content {
      margin-left: 250px;
      padding: 20px;
    }
    .navbar-custom {
      margin-left: 250px;
      background: linear-gradient(#028a3dc2, #028a3d);
      color: #fff;
      padding: 10px 20px;
    }
    .card-custom {
      border: none;
      border-radius: 12px;
      box-shadow: 0 3px 6px rgba(0,0,0,0.1);
    }
    .table thead {
      background:  #028a3d;
      color: white;
    }

    .brand-title {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px; /* jarak antara logo dan teks */
}

.brand-title .logo {
  width: 50px;
  height: 50px;
  border-radius: 50%; /* opsional kalau mau bulat */
}

.sidebar {
  width: 250px;
  height: 100vh;
  background: linear-gradient(#028a3dc2, #028a3d);
  position: fixed;
  top: 0;
  left: 0;
  padding-top: 20px;
  color: #fff;
  transition: transform 0.3s ease; /* ✨ Transisi efek buka/tutup */
  z-index: 1000;
}

.sidebar.collapsed {
  transform: translateX(-100%);
}

.navbar-custom {
  margin-left: 250px;
  background: linear-gradient(#028a3dc2, #028a3d);
  color: #fff;
  padding: 10px 20px;
  transition: margin-left 0.3s ease; /* ✨ Transisi navbar ikut bergeser */
}

.navbar-custom.collapsed {
  margin-left: 0;
}

.content {
  margin-left: 250px;
  padding: 20px;
  transition: margin-left 0.3s ease; /* ✨ Transisi konten ikut bergeser */
}

.content.collapsed {
  margin-left: 0;
}

.toggle-btn {
  background: none;
  border: none;
  font-size: 24px;
  color: white;
  cursor: pointer;
  margin-right: 20px;
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
    <a href="akses.php" >🔑 Akses</a>
    <a href="anggota.php">👤 Anggota</a>
    <a href="keanggotaan dan kerjasama.php" class="active" >💰 Keanggotaan & Mitra..</a>
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
  <div class="content">
    <h4 class="mb-3">💰 Keanggotaan & Mitra Kerjasama</h4>
    <div class="alert alert-info">
      Berikut ini adalah halaman simpanan anggota yang digunakan untuk mengelola data simpanan/tabungan anggota.
      Adapun data simpanan tersebut terdiri dari simpanan pokok, simpanan wajib, dan simpanan sukarela.
    </div>

    <!-- Action Buttons -->
    <div class="mb-3">
      <button class="btn btn-dark">🔍 Cari</button>
      <button class="btn btn-info">🔎 Filter</button>
      <button class="btn btn-warning">🗄 Database</button>
      <button class="btn btn-primary">➕ Tambah</button>
    </div>

    <input type="text" id="searchInput" placeholder="Cari data..." class="form-control mb-3">
        
    <!-- Table -->
    <div class="card card-custom p-3">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>ID Simpanan</th>
            <th>Anggota</th>
            <th>Keterangan</th>
            <th>Jurnal</th>
            <th>Jumlah</th>
            <th>Opsi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td><a href="#">0000018</a><br><small>01/06/2022</small></td>
            <td>👤 Fikri Renaldy</td>
            <td>🏷 Simpanan Wajib</td>
            <td><span class="badge bg-success">✔ Journal</span></td>
            <td>50.000</td>
            <td>
              <button class="btn btn-success btn-sm">✏️</button>
              <button class="btn btn-danger btn-sm">❌</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td><a href="#">0000017</a><br><small>01/06/2022</small></td>
            <td>👤 Fikri Renaldy</td>
            <td>🏷 Simpanan Pokok</td>
            <td><span class="badge bg-success">✔ Journal</span></td>
            <td>50.000</td>
            <td>
              <button class="btn btn-success btn-sm">✏️</button>
              <button class="btn btn-danger btn-sm">❌</button>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td><a href="#">0000016</a><br><small>01/05/2022</small></td>
            <td>👤 Fikri Renaldy</td>
            <td>🏷 Simpanan Pokok</td>
            <td><span class="badge bg-success">✔ Journal</span></td>
            <td>50.000</td>
            <td>
              <button class="btn btn-success btn-sm">✏️</button>
              <button class="btn btn-danger btn-sm">❌</button>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td><a href="#">0000015</a><br><small>01/02/2022</small></td>
            <td>👤 Fikri Renaldy</td>
            <td>🏷 Simpanan Wajib</td>
            <td><span class="badge bg-success">✔ Journal</span></td>
            <td>50.000</td>
            <td>
              <button class="btn btn-success btn-sm">✏️</button>
              <button class="btn btn-danger btn-sm">❌</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
  const toggleBtn = document.getElementById('toggleSidebar');
  const sidebar = document.querySelector('.sidebar');
  const navbar = document.getElementById('navbar');
  const content = document.querySelector('.content');

  toggleBtn.addEventListener('click', () => {
    sidebar.classList.toggle('collapsed');
    navbar.classList.toggle('collapsed');
    content.classList.toggle('collapsed');
  });
</script>

</body>
</html>
