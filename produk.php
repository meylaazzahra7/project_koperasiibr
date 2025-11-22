<?php
include "koneksi.php"; // file koneksi MySQL

$query = "SELECT * FROM produk WHERE id=1"; 
$result = mysqli_query($conn, $query);
$produk = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Koperasi IBR - Ketentuan Simpanan Pokok</title>
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

    /* LOGO */
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

    /* NAVBAR MENU */
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
      background: var(--hijau);
      color: var(--putih);
    }

    nav ul li:hover .dropdown-content {
      display: flex;
    }

    /* WHATSAPP BUTTON */
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

    /* MAIN CONTENT */
    .content {
      max-width: 1000px;
      margin: 50px auto;
      background: var(--putih);
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.08);
    }

    .content h1 {
      font-size: 1.8rem;
      text-align: center;
      margin-bottom: 15px;
      color: #222;
    }

    .underline {
      width: 60px;
      height: 4px;
      background: var(--hijau);
      margin: 0 auto 30px;
      border-radius: 2px;
    }

    .content p {
      margin-bottom: 15px;
    }

    .content a {
      color: #0073e6;
      text-decoration: none;
    }

    .content a:hover {
      text-decoration: underline;
    }

    /* FOOTER */
    footer {
      background: limegreen;
      color: var(--putih);
      text-align: center;
      padding: 20px;
      margin-top: 50px;
    }

    /* RESPONSIVE */
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

  <script>
  // Ambil URL sekarang
  const currentLocation = window.location.href;
  const menuItems = document.querySelectorAll("nav ul li a");

  menuItems.forEach(item => {
    if (item.href === currentLocation) {
      item.classList.add("active");
    }
  });
</script>

</head>
<body>

  <!-- HEADER -->
  <header>
    <div class="navbar">
      <div class="logo">
        <img src="logo2.png" alt="Logo Koperasi">
        <span>KOPERASI IBR</span>
      </div>

      <!-- Mobile Menu -->
      <div class="menu-toggle">☰</div>

      <!-- Navigation -->
      <nav>
        <ul>
          <li><a href="homepage.php">Beranda</a></li>
          <li class="dropdown">
            <a href="#">Tentang Kami ▾</a>
            <div class="dropdown-content">
              <a href="#">Sambutan Ketua</a>
              <a href="#">Visi & Misi</a>
              <a href="#">Struktur Organisasi</a>
              <a href="#">Legalitas</a>
            </div>
          </li>
          <li><a href="kerjasama.php">Keanggotaan & Mitra Kerjasama</a></li>
          <li class="dropdown">
            <a href="produk.html" class="active">Produk</a>
            </li>
          <li><a href="keunggulan.php">Keunggulan & Benefit</a></li>
          <li class="dropdown">
            <a href="event.php">Event & Media</a>
          </li>
        </ul>
      </nav>

  </header>

  <!-- CONTENT -->
  <main class="content">
  <h1><?php echo $produk['judul']; ?></h1>
  <div class="underline"></div>
  <p><?php echo nl2br($produk['isi']); ?></p>
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
  </script>
</body>
</html>
