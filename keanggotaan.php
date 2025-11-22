<?php
include 'project.php';
$query = "SELECT * FROM mitra_kerjasama ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='mitra'>";
    echo "<img src='uploads/".$row['logo']."' alt='".$row['nama_mitra']."'>";
    echo "<p>".$row['nama_mitra']."</p>";
    echo "</div>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Koperasi IBR</title>
  <style>
    :root {
      --hijau: #28a745;
      --kuning: #ffc107;
      --putih: #ffffff;
      --teks: #333333;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
      color: var(--teks);
    }

    /* HEADER */
    header {
      background: var(--putih);
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .navbar {
      max-width: 1200px;
      margin: auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 20px;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo img {
      height: 50px;
      width: 50px;
      object-fit: cover;
    }

    .logo span {
      font-size: 1.2rem;
      font-weight: bold;
      color: var(--hijau);
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 25px;
    }

    nav ul li {
      position: relative;
    }

    nav ul li a {
      text-decoration: none;
      color: var(--hijau);
      font-weight: 500;
      transition: 0.3s;
    }

    nav ul li a:hover {
      color: var(--kuning);
    }

    /* DROPDOWN */
    .dropdown-content {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background: var(--putih);
      min-width: 200px;
      border-radius: 5px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      flex-direction: column;
      z-index: 2000;
    }

    .dropdown-content a {
      padding: 10px 15px;
      color: var(--teks);
      display: block;
    }

    .dropdown-content a:hover {
      background: var(--kuning);
      color: var(--putih);
    }

    nav ul li:hover .dropdown-content {
      display: flex;
    }

    /* CONTENT */
    .container {
      max-width: 1200px;
      margin: 40px auto;
      padding: 0 20px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 30px;
    }

    .card {
      background: var(--putih);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .card h2 {
      color: var(--hijau);
      margin-bottom: 15px;
    }

    /* LOGO MITRA */
    .partners {
      text-align: center;
      margin-top: 60px;
    }

    .partners h2 {
      color: var(--hijau);
      margin-bottom: 10px;
    }

    .underline {
      width: 80px;
      height: 4px;
      background: var(--hijau);
      margin: 0 auto 30px;
      border-radius: 2px;
    }

    .partner-logos {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
    }

    .partner-logos img {
      width: 230px;
      height: 150px;
      object-fit: contain;
      background: var(--putih);
      padding: 10px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.3s;
    }

    .partner-logos img:hover {
      transform: translateY(-5px);
    }

    /* FOOTER */
    footer {
      background: var(--hijau);
      color: var(--putih);
      text-align: center;
      padding: 20px;
      margin-top: 40px;
    }

    /* RESPONSIVE */
    @media(max-width: 768px) {
      .navbar {
        flex-wrap: wrap;
      }

      nav ul {
        flex-direction: column;
        width: 100%;
        display: none;
        margin-top: 15px;
        background: var(--putih);
        padding: 15px;
        border-radius: 10px;
      }

      nav ul.show {
        display: flex;
      }

      .menu-toggle {
        display: block;
        cursor: pointer;
        font-size: 1.8rem;
        color: var(--hijau);
      }

      .container {
        grid-template-columns: 1fr;
      }
    }

    @media(min-width: 769px) {
      .menu-toggle {
        display: none;
      }
    }
  </style>
</head>
<body>

  <!-- HEADER -->
  <header>
    <div class="navbar">
      <div class="logo">
        <img src="logo2.png" alt="Logo Koperasi">
        <span>KOPERASI IBR</span>
      </div>

      <div class="menu-toggle">☰</div>
      <nav>
        <ul>
          <li><a href="#">Beranda</a></li>
          <li class="dropdown">
            <a href="#">Tentang Kami ▾</a>
            <div class="dropdown-content">
              <a href="#">Sambutan Ketua</a>
              <a href="#">Visi & Misi</a>
              <a href="#">Struktur Organisasi</a>
              <a href="#">Legalitas</a>
            </div>
          </li>
          <li><a href="#">Keanggotaan & Mitra Kerjasama</a></li>
          <li class="dropdown">
            <a href="#">Produk ▾</a>
            <div class="dropdown-content">
              <a href="#">Simpanan</a>
              <a href="#">Pinjaman</a>
            </div>
          </li>
          <li><a href="#">Keunggulan & Benefit</a></li>
          <li class="dropdown">
            <a href="#">Event & Media ▾</a>
            <div class="dropdown-content">
              <a href="#">Berita</a>
              <a href="#">Galeri</a>
            </div>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- CONTENT -->
  <section class="container">
    <div class="card">
      <h2>Keanggotaan</h2>
      <p>KSP IBR sebagai Primer Koperasi Nasional beranggotakan Pegawai/Karyawan/Anggota Kopkar/Anggota Kopeg pada Institusi Mitra Kerjasama.</p>
    </div>
    <div class="card">
      <h2>Mitra Kerjasama</h2>
      <p>Institusi Mitra Kerjasama KSP IBR meliputi:</p>
      <ul>
        <li>Institusi Pemerintah</li>
        <li>Institusi Swasta</li>
        <li>Kopkar / Kopeg</li>
      </ul>
    </div>
  </section>

  <!-- PARTNER LOGOS -->
  <section class="partners">
    <h2>Mitra Kerjasama</h2>
    <div class="underline"></div>
    <div class="partner-logos">
      <img src="logo2.png" alt="Logo Mitra 1">
      <img src="logo2.png" alt="Logo Mitra 2">
      <img src="logo2.png" alt="Logo Mitra 3">
      <img src="logo2.png" alt="Logo Mitra 4">
      <img src="logo2.png" alt="Logo Mitra 5">
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <p>&copy; 2025 Koperasi IBR. Semua Hak Dilindungi.</p>
  </footer>

  <!-- SCRIPT -->
  <script>
    const menuToggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('nav ul');

    menuToggle.addEventListener('click', () => {
      nav.classList.toggle('show');
    });
  </script>
</body>
</html>
