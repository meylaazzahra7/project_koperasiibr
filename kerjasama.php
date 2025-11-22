<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Koperasi IBR - Keanggotaan & Mitra Kerjasama</title>
  <style>
    :root {
      --hijau: #28a745;
      --kuning: #ffc107;
      --putih: #ffffff;
      --teks: #024c27;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background: #f7f9fc;
      color: var(--teks);
      line-height: 1.7;
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
      color: var(--teks);
      font-weight: bold;
      transition: 0.3s;
    }

    nav ul li a:hover {
      color: var(--hijau);
    }

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
      background: var(--hijau);
      color: var(--putih);
    }

    nav ul li:hover .dropdown-content {
      display: flex;
    }

    .wa-btn {
      background: #0d3b66;
      color: var(--putih);
      padding: 8px 15px;
      border-radius: 6px;
      text-decoration: none;
      font-size: 0.9rem;
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .wa-btn:hover {
      background: var(--hijau);
    }

    /* CONTENT */
    .content {
      max-width: 1100px;
      margin: 50px auto;
      background: var(--putih);
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.08);
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      margin-bottom: 50px;
    }

    .col {
      flex: 1;
      min-width: 300px;
    }

    .col h2 {
      font-size: 1.5rem;
      margin-bottom: 15px;
      color: #024c27;
    }

    .col p, .col ul {
      font-size: 1rem;
      line-height: 1.6;
      color: #000000ff;
      text-align: justify;
    }

    .col ul {
      margin-left: 20px;
    }

    h2.section-title {
      text-align: center;
      margin-bottom: 10px;
      font-size: 1.6rem;
    }

    .underline {
      width: 60px;
      height: 4px;
      background: var(--hijau);
      margin: 0 auto 30px;
      border-radius: 2px;
    }

    .logo-list {
      display: flex;
      justify-content: center;
      gap: 25px;
      flex-wrap: wrap;
    }

    .logo-item {
      width: 120px;
      height: 120px;
      border: 2px solid #ddd;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #fafafa;
      font-size: 0.9rem;
      text-align: center;
    }

    .logo-item img {
  max-width: 100%;
  max-height: 100%;
  object-fit: contain;
  }


    /* FOOTER */
    footer {
      background: limegreen;
      color: var(--putih);
      text-align: center;
      padding: 20px;
      margin-top: 50px;
    }

    @media(max-width: 768px) {
      nav ul {
        flex-direction: column;
        width: 100%;
        display: none;
        background: var(--putih);
        padding: 15px;
        border-radius: 10px;
        margin-top: 15px;
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
    }

    @media(min-width: 769px) {
      .menu-toggle {
        display: none;
      }
    }

    nav ul li a.active {
      color: var(--hijau);
      font-weight: bold;
      border-bottom: 2px solid var(--hijau);
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
          <li><a href="homepage.php">Beranda</a></li>
          <li class="dropdown">
            <a href="#">Tentang Kami ▾</a>
            <div class="dropdown-content">
              <a href="homepage.php">Visi & Misi</a>
              <a href="homepage.php">Values</a>
              <a href="homepage.php">Struktur Organisasi</a>
              <a href="homepage.php">Legalitas</a>
              <a href="homepage.php">Program Kerja</a>
              <a href="homepage.php">Hubungi Kami</a>
            </div>
          </li>
          <li class="dropdown">
            <a href="kerjasama.php" class="active">Keanggotaan & Mitra Kerjasama</a>
          </li>
          <li><a href="produk.php">Produk</a></li>
          <li><a href="#">Keunggulan & Benefit</a></li>
          <li class="dropdown">
            <a href="event.php">Event & Media</a>
            </div>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- CONTENT -->
  <main class="content">
    <div class="row">
      <div class="col">
        <h2>Keanggotaan</h2>
        <p>
          Koperasi Karyawan PT Indobharat Rayon terbuka bagi seluruh karyawan perusahaan yang ingin meningkatkan kesejahteraan bersama.
          Anggota memiliki hak dan kewajiban yang jelas, serta memperoleh berbagai manfaat, antara lain:
          Manfaat: akses simpan pinjam dengan bunga ringan, harga kebutuhan pokok lebih terjangkau, serta kesempatan mendapatkan SHU (Sisa Hasil Usaha) setiap tahun.
          Syarat: karyawan aktif PT Indobharat Rayon, bersedia membayar simpanan pokok dan simpanan wajib sesuai ketentuan.
          Hak Anggota: memperoleh pelayanan koperasi, berpartisipasi dalam Rapat Anggota Tahunan (RAT), serta memberikan usulan demi perkembangan koperasi.
          Dengan menjadi anggota, karyawan tidak hanya mendapat keuntungan ekonomi, tetapi juga turut membangun solidaritas dan kebersamaan di lingkungan kerja.
        </p>
      </div>
      <div class="col">
        <h2>Mitra Kerjasama</h2>
        <p>
          Dalam rangka meningkatkan pelayanan kepada anggota, Kopkar PT Indobharat Rayon menjalin kemitraan dengan berbagai perusahaan dan toko di sekitar Purwakarta dan sekitarnya.
          Bentuk kerjasama meliputi:
        </p>
        <ul>
          <li>Kemitraan strategis dengan toko kebutuhan sehari-hari, minimarket, dan pusat belanja.</li>
          <li>Dukungan dari mitra usaha untuk penyediaan barang dengan harga khusus bagi anggota koperasi.</li>
          <li>Kolaborasi berkelanjutan guna memperluas manfaat serta memberikan pelayanan terbaik kepada anggota.</li>
        </ul>
      </div>
    </div>

    <h2 class="section-title">Mitra Kerjasama</h2>
    <div class="underline"></div>

    <div class="logo-list">
      <div class="logo-item"><img src="logo1.jpg" alt="Mitra 1"></div>
      <div class="logo-item"><img src="logo2.jpg" alt="Mitra 2"></div>
      <div class="logo-item"><img src="logo3.jpg" alt="Mitra 3"></div>
      <div class="logo-item"><img src="logo4.jpg" alt="Mitra 4"></div>
      <div class="logo-item"><img src="logo5.jpg" alt="Mitra 5"></div>
      <div class="logo-item"><img src="logo6.jpg" alt="Mitra 6"></div>
      <div class="logo-item"><img src="logo7.jpg" alt="Mitra 7"></div>
      <div class="logo-item"><img src="logo8.png" alt="Mitra 8"></div>
      <div class="logo-item"><img src="images/logo9.png" alt="Mitra 9"></div>
    </div>
  </main>

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

    // highlight menu aktif
    const currentLocation = window.location.href;
    const menuItems = document.querySelectorAll("nav ul li a");
    menuItems.forEach(item => {
      if (item.href === currentLocation) {
        item.classList.add("active");
      }
    });
  </script>
</body>
</html>
