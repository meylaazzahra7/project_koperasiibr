<!DOCTYPE html>
<html lang="id">
<?php
$nib_file = "NIB_IZIN.pdf";
$sertifikat_file = "KEMENKUMHAM.pdf";
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IS Society</title>
  <style>
    body, html {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #ffffff;
    }

    /* Navbar */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #ffffff; 
      padding: 15px 40px;
      color: white;
    }

    .logo {
      display: flex;
      align-items: center;
      font-weight: bold;
      font-size: 20px;
      color: #00b050;
      gap: 10px; /* jarak antara logo dan teks */
    }

    .logo-img {
    height: 55px;  /* sesuaikan ukuran logo */
    width: auto;
    }


    .navbar ul {
      list-style: none;
      display: flex;
      gap: 20px;
      margin: 0;
      padding: 0;
    }

    .navbar ul li a {
      text-decoration: none;
      color: #000000ff;
      font-weight: bold;
      transition: color 0.3s;
    }

    .navbar ul li a:hover {
      color: #00b050 /* kuning keemasan */
    }

    /* Hero Slider */
    .hero {
      position: relative;
      height: 100vh;
      overflow: hidden;
    }

    .slides {
      display: flex;
      width: 300%;
      height: 100%;
      animation: slide 15s infinite;
    }

    .slides img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* Overlay */
    .overlay {
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(11, 61, 46, 0.6);
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: white;
    }

    .overlay h1 {
      font-size: 50px;
      margin: 0;
    }

    .overlay p {
      font-size: 18px;
      margin: 10px 0 20px;
    }

    .btn {
      background-color: #24fc08ff;
      color: #0b3d2e;
      padding: 12px 30px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      text-decoration: none;
    }

    .btn:hover {
      background-color: #24fc08ff;
    }

    @keyframes slide {
      0%   {margin-left: 0;}
      30%  {margin-left: 0;}
      35%  {margin-left: -100%;}
      65%  {margin-left: -100%;}
      70%  {margin-left: -200%;}
      100% {margin-left: -200%;}
    }
/* Tentang Kami */

    .tentang-kami {
        background: #f8f8f8;
        height: 100vh; /* Full layar */
        display: flex;
        align-items: center; /* Tengah vertikal */
        position: relative;
        overflow: hidden;
        padding: 0 20px; /* hilangkan padding atas-bawah besar */
    }
    .tentang-kami .container {
        max-width: 1100px;
        margin: auto;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 30px;
        position: relative;
        z-index: 2; /* supaya di atas lingkaran */
    }
    .tentang-kami .text {
        flex: 1 1 500px;
    }

    .tentang-kami h2 {
        font-size: 32px;
        color: #024c27;
        position: relative;
        margin-bottom: 20px;
    }

    .tentang-kami h2::after {
        content: "";
        display: block;
        width: 80px;
        height: 3px;
        background: linear-gradient(to right, #00b050, #c1f0c1);
        margin-top: 5px;
    }

    .tentang-kami p {
        font-size: 16px;
        line-height: 1.6;
        color: #333;
        margin-bottom: 15px;
    }

    .tentang-kami .image {
        flex: 1 1 400px;
        text-align: center;
    }

    .tentang-kami .image img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .tentang-kami .image img:hover {
        transform: scale(1.05);
        box-shadow: 0 12px 30px rgba(0,0,0,0.15);
    }

    /* Dekorasi lingkaran untuk Tentang Kami */
    .tentang-kami {
        background: #f8f8f8;
        padding: 60px 20px;
        position: relative; /* penting supaya lingkaran posisinya relatif ke section */
        overflow: hidden; /* biar lingkaran tidak keluar */
    }

    .tentang-kami .circle-left {
        width: 300px;
        height: 300px;
        top: -80px;
        left: -80px;
    }

    .tentang-kami .circle-right {
        width: 250px;
        height: 250px;
        bottom: -60px;
        right: -60px;
    }
    /* Responsif */
@media (max-width: 768px) {
    .tentang-kami .container {
        flex-direction: column;
        text-align: center;
    }
}

.visi-misi {
    background: #eafff1;
    height: 100vh; /* FULL layar */
    display: flex;
    flex-direction: column;
    justify-content: center; /* Tengah vertikal */
    position: relative;
    overflow: hidden;
    padding: 0 20px; /* Biar kiri kanan ada jarak */
}

.visi-misi .container {
    max-width: 1000px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}
.visi-misi h2 {
    font-size: 32px;
    color: #024c27;
    position: relative;
    display: inline-block;
    margin-bottom: 15px;
}

.visi-misi h2::after {
    content: "";
    display: block;
    width: 80px;
    height: 3px;
    background: linear-gradient(to right, #00b050, #c1f0c1);
    margin-top: 5px;
}
.visi-misi .intro {
    max-width: 750px;
    margin-bottom: 40px;
    font-size: 16px;
    line-height: 1.6;
    color: #333;
}
.card-list {
    display: flex;
    flex-wrap: wrap;
    gap: 25px;
}

.card {
    background: white;
    border-radius: 12px;
    padding: 20px;
    flex: 1;
    min-width: 300px;
    display: flex;
    gap: 15px;
    align-items: center; /* Ikon centang akan di tengah vertikal */
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}
.icon img {
    width: 40px;
    height: 40px;
}
.text h3 {
    font-size: 20px;
    color: #007B2E;
    margin-bottom: 5px;
}
.text p {
    font-size: 15px;
    line-height: 1.5;
    color: #444;
}

/* Background lingkaran */
.circle-bg {
    position: absolute;
    border-radius: 50%;
    background: #00b050;
    opacity: 0.15;
    z-index: 1;
}

.circle-left {
    width: 300px;
    height: 300px;
    top: -80px;
    left: -80px;
}

.circle-right {
    width: 250px;
    height: 250px;
    bottom: -60px;
    right: -60px;
}

/* Responsif */
@media (max-width: 768px) {
    .card-list {
        flex-direction: column;
    }
}
/* Core Values Section */
.core-values {
  background: #fff;
  padding: 50px 20px;
  text-align: center;
}

.core-values h2 {
  font-size: 32px;
  color: #024c27;
  position: relative;
  display: inline-block;
  margin-bottom: 40px;
  text-align: center;
}

.core-values h2::after {
  content: "";
  display: block;
  width: 80px;
  height: 3px;
  background: linear-gradient(to right, #00b050, #c1f0c1);
  margin: 8px auto 0; /* auto biar center */
  border-radius: 2px;
}


.core-values .sub-title {
  font-size: 16px;
  font-weight: bold;
  color: #666;
  margin-bottom: 50px;
}

/* Timeline Container */
.timeline {
  position: relative;
  max-width: 800px;
  margin: auto;
}

.timeline::before {
  content: "";
  position: absolute;
  top: 0; bottom: 0;
  left: 4%;
  width: 2px;
  background: #ccc;
  transform: translateX(-50%);
}

.timeline-item {
  display: flex;
  align-items: center;
  margin-bottom: 50px;
  position: relative;
}

.timeline-icon {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background: #e0f7ec;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  z-index: 2;
}

.timeline-icon img {
  width: 45px;
  height: 45px;
}

.timeline-number {
  background: #00b050;
  color: #fff;
  font-weight: bold;
  padding: 10px 15px;
  border-radius: 6px;
  margin-left: 20px;
  margin-right: 20px;
}

.timeline-content {
  text-align: left;
  max-width: 400px;
}

.timeline-content h3 {
  margin: 0;
  font-size: 20px;
  color: #007B2E;
}

.timeline-content p {
  margin: 5px 0 0;
  font-size: 15px;
  color: #444;
}

/* Responsif */
@media (max-width: 768px) {
  .timeline::before {
    left: 20px;
  }
  .timeline-item {
    flex-direction: column;
    align-items: flex-start;
  }
  .timeline-icon {
    left: 0;
    margin-bottom: 10px;
  }
  .timeline-number {
    margin: 10px 0;
  }
}

/* Struktur Organisasi Section */
.struktur-organisasi {
  padding-top: 0px;   /* default biasanya 60px, dikecilin */
  padding-bottom: 50px;
    background: #eafff1;
    height: 100vh; /* Membuat section ini setinggi viewport */
    display: flex;
    flex-direction: column;
    justify-content: center; /* Memusatkan konten secara vertikal */
    align-items: center; /* Memusatkan konten secara horizontal */
    text-align: center;
    padding: 20 20px;
}

.struktur-organisasi .container {
    max-width: 1100px;
    margin: 10px;
}

.struktur-organisasi h2 {
  margin-top: 0;       /* biar nempel ke atas section */
  margin-bottom: 15px; /* jarak ke bawah (gambar) tetap ada */
  font-size: 32px;
  color: #024c27;
  position: relative;
  display: inline-block;
  text-align: center;
}

.struktur-organisasi h2::after {
    content: "";
  display: block;
  width: 80px;
  height: 3px;
  background: linear-gradient(to right, #00b050, #c1f0c1);
  margin: 8px auto 0; /* auto biar center */
  border-radius: 2px;
}

.organisasi-diagram {
    margin-top: 8px;
    border-radius: 12px;
    overflow: hidden;
    max-width: 100%;
    display: flex;
    justify-content: center;
}

.organisasi-diagram img { 
    max-width: 70%;
    height: auto;
}

/* Legalitas Section */
 .legalitas {
        padding-top: 5px; 
        padding-bottom: 70px;
        background: #ffffffff;
        text-align: center;
    }
    .legalitas h2 {
  font-size: 32px;
  color: #024c27;
  position: relative;
  display: inline-block;
  margin-bottom: 20px;
  text-align: center;
}

.legalitas h2::after {
  content: "";
  display: block;
  width: 80px;
  height: 3px;
  background: linear-gradient(to right, #00b050, #ffffffff);
  margin: 8px auto 0; /* auto biar center */
  border-radius: 2px;
}

    /* === Card Container === */
    .dokumen-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 25px;
        max-width: 1000px;
        margin: 40px auto 0;
    }

    /* === Card Item === */
    .dokumen-item {
        background: limegreen;
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        text-align: center;
        transition: transform 0.2s;
    }
    .dokumen-item:hover {
        transform: translateY(-5px);
    }
    .dokumen-icon {
        font-size: 50px;
        color: #0073e6;
        margin-bottom: 15px;
    }
    .dokumen-item h3 {
        font-size: 18px;
        font-weight: bold;
        color: #fff;
        margin-bottom: 8px;
    }
    .dokumen-item p {
        font-size: 14px;
        color: #fff;
        margin-bottom: 20px;
    }

    /* === Tombol === */
    .btn-detail {
        display: inline-block;
        background: #222;
        color: #fff;
        padding: 12px 25px;
        border-radius: 30px;
        font-size: 14px;
        text-decoration: none;
        font-weight: bold;
        transition: background 0.3s;
    }
    .btn-detail:hover {
        background: #00b050;
    }
    .file-missing {
        color: red;
        font-size: 14px;
        font-style: italic;
    }

    @media(max-width: 768px) {
        .dokumen-container {
            grid-template-columns: 1fr;
        }
    }


/* Modal */
.modal {
  display: none;
  position: fixed;
  z-index: 9999;
  left: 0; top: 0;
  width: 100%; height: 100%;
  background: rgba(0,0,0,0.6);
}

.modal-content {
  position: relative;
  margin: 5% auto;
  width: 80%; height: 80%;
  background: #fff;
  border-radius: 10px;
  padding: 0;
  overflow: hidden;
  display: flex;
  flex-direction: column;
}

.modal-content iframe {
  flex: 1;
  width: 100%;
  border: none;
}

.close {
  position: absolute;
  top: 10px; right: 20px;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
  color: #333;
}

.btn-close {
  background: #007B2E;
  color: #fff;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  border-radius: 6px;
  margin: 10px auto;
}
.btn-close:hover {
  background: #005e22;
}

/* Section Hubungi Kami */
#hubungi-kami {
  padding: 60px 20px;
  background: limegreen; /* biru */
  text-align: center;
  color: #fff;
}

#hubungi-kami .container {
  max-width: 900px;
  margin: auto;
}

#hubungi-kami h2 {
  font-size: 28px;
  font-weight: bold;
  margin-bottom: 20px;
}

#hubungi-kami .alamat,
#hubungi-kami .kontak {
  font-size: 18px;
  margin: 10px 0;
}

#hubungi-kami .kontak a {
  color: #fff;
  text-decoration: none;
}

#hubungi-kami .cta {
  margin-top: 30px;
}

#hubungi-kami .btn-b2b {
  display: inline-block;
  background: #333;
  color: #fff;
  padding: 15px 40px;
  border-radius: 50px;
  font-size: 18px;
  text-decoration: none;
  transition: background 0.3s;
}

#hubungi-kami .btn-b2b:hover {
  background: #555;
}

/* Tombol Scroll ke Atas */
#hubungi-kami .scroll-top {
  position: fixed;
  bottom: 30px;
  right: 30px;
  background: #fff;
  color: #000;
  width: 50px;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  text-decoration: none;
  box-shadow: 0 3px 8px rgba(0,0,0,0.3);
  font-size: 20px;
  transition: background 0.3s;
}

#hubungi-kami .scroll-top:hover {
  background: #ddd;
}
/* Dropdown */
.navbar ul li {
  position: relative;
}

nav ul li:hover > ul {
  display: block;
}

.dropdown-content {
  display: none;
  position: absolute;
  top: 120%; /* kasih jarak sedikit dari navbar */
  left: 0;
  background: #fff;
  min-width: 220px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  z-index: 999;
  border-radius: 8px;
  flex-direction: column;
  opacity: 0;
  transform: translateY(-10px);
  transition: all 0.3s ease;
}

.dropdown-content li {
  display: block; /* tiap item turun ke bawah */
  width: 100%;
}

.dropdown-content li a {
  display: block;
  padding: 10px 15px;
  color: #00b050;
  text-decoration: none;
  white-space: nowrap; /* biar teks ga pecah */
}

.dropdown-content li a:hover {
  background: #f1f1f1;
  color: #ffd700;
}

/* Show on hover */
.dropdown:hover .dropdown-content {
  display: flex;
  opacity: 1;
  transform: translateY(0);
}


</style>

<script>
function openPDF(file) {
  document.getElementById("pdfViewer").src = file;
  document.getElementById("pdfModal").style.display = "block";
}
function closePDF() {
  document.getElementById("pdfModal").style.display = "none";
  document.getElementById("pdfViewer").src = ""; // reset biar ringan
}
</script>


  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="logo">
        <img src="logo2.png" alt="Logo" class="logo-img">
        KOPERASI IBR
    </div>

    <ul>
      <li><a href="#">Beranda</a></li>
      
    <!-- Dropdown Tentang Kami -->
    <li class="dropdown">
      <a href="#">Tentang Kami ▼</a>
      <ul class="dropdown-content">
        <li><a href="#visi-misi">Visi & Misi</a></li>
        <li><a href="#core-values">Values</a></li>
        <li><a href="#struktur-organisasi">Struktur Organisasi</a></li>
        <li><a href="#legalitas">Legalitas</a></li>
        <li><a href="#program-kerja">Program Kerja</a></li>
        <li><a href="#hubungi-kami">Hubungi Kami</a></li>
      </ul>
    </li>
      <li><a href="kerjasama.php">Keanggotaan & Mitra Kerjasama</a></li>
      <li><a href="produk.php">Produk</a></li>

      
      <li><a href="#">Keunggulan & Benefit</a></li>
      <li><a href="#">Event & Media</a></li>
    </ul>
  </nav>

  <!-- Hero Slider -->
  <section class="hero">
    <div class="slides">
      <img src="photo1.jpg" alt="Foto 1">
      <img src="background.jpg" alt="Foto 2">
      <img src="indobarat4.jpg" alt="Foto 3">
    </div>
    <div class="overlay">
      <div>
        <h1>Selamat Datang</h1>
        <p>di Website Koperasi PT. INDOBHARAT RAYON</p>
        <a href="forum.php" class="btn">Forum</a>
      </div>
    </div>
  </section>
  <!-- Tentang Kami -->
<section class="tentang-kami" id="tentang">
    <div class="circle-bg circle-left"></div>
    <div class="circle-bg circle-right"></div>

    <div class="container">
        <div class="text">
            <h2>Tentang Kami</h2>
            <p>
                Koperasi Karyawan PT. Indo Bharat Rayon adalah wadah untuk meningkatkan kesejahteraan karyawan melalui berbagai program seperti simpan pinjam, 
                kegiatan sosial, dan pemberdayaan ekonomi.
                Kami berkomitmen untuk melayani anggota dengan penuh integritas, transparansi, dan profesionalisme.
            </p>
            <p>
               Didirikan dengan tujuan utama untuk memperkuat solidaritas antar karyawan, 
               koperasi ini hadir sebagai sarana yang tidak hanya berfokus pada aspek ekonomi, 
               tetapi juga sosial. Melalui kerja sama yang baik, kami percaya koperasi mampu menjadi mitra yang bermanfaat bagi setiap anggota untuk mencapai kesejahteraan bersama.
            </p>
        </div>
        <div class="image">
            <img src="tentang kami.png" alt="Tentang Kami">
        </div>
    </div>
</section>


<!-- Visi dan Misi -->
<section class="visi-misi" id="visi-misi">
    <div class="circle-bg circle-left"></div>
    <div class="circle-bg circle-right"></div>

    <div class="container">
        <h2>Visi dan Misi</h2>
        <p class="intro">
            Visi kami adalah menjadi koperasi terbaik dalam meningkatkan kesejahteraan karyawan.  
            Misi kami adalah memberikan layanan simpan pinjam, kegiatan sosial, dan pemberdayaan ekonomi
            yang transparan, profesional, dan berintegritas.
        </p>

        <div class="card-list">
            <div class="card">
                <div class="icon">
                    <img src="centang.jpeg" alt="Centang">
                </div>
                <div class="text">
                    <h3>Visi</h3>
                    <p>Terwujudnya koperasi simpan pinjam yang mandiri dan tangguh dengan berlandaskan amanah dalam membangun ekonomi bersama dan berkeadilan.</p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <img src="centang.jpeg" alt="Centang">
                </div>
                <div class="text">
                    <h3>Misi</h3>
                    <p>Mengajak seluruh potensi anggota agar dapat bersama-sama, bersatu dalam membangun ekonomi dalam bentuk koperasi.</p>
                </div>
                
    </div>
</section>
<section class="core-values" id="core-values">
  <div class="container">
    <h2>Core Values</h2>
    <div class="timeline">

      <div class="timeline-item">
        <div class="timeline-icon">
          <img src="corevalue1.png" alt="Keanggotaan sukarela & terbuka">
        </div>
        <div class="timeline-number">01</div>
        <div class="timeline-content">
          <h3>Keanggotaan sukarela & terbuka</h3>
          <p>Anggota bergabung/keluar tanpa paksaan, tanpa diskriminasi.</p>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-icon">
          <img src="corevalue2.jpeg" alt="Pengendalian demokratis oleh anggota">
        </div>
        <div class="timeline-number">02</div>
        <div class="timeline-content">
          <h3>Pengendalian demokratis oleh anggota</h3>
          <p>“Satu anggota, satu suara”, keputusan diambil secara demokratis.</p>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-icon">
          <img src="corevalue3.png" alt="Partisipasi ekonomi anggota ">
        </div>
        <div class="timeline-number">03</div>
        <div class="timeline-content">
          <h3>Partisipasi ekonomi anggota </h3>
          <p>Modal dihimpun dari anggota; SHU dibagi sesuai partisipasi, bukan besarnya modal.</p>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-icon">
          <img src="Heksagonal_Komitmen_Tangan_Komitmen_Tim_Bersama_Logo_Hitam__Komitmen__Bisnis__Kesepakatan_PNG_dan_Vektor_dengan_Background_Transparan_untuk_Unduh_Gratis-removebg-preview.png" alt="Otonomi & kemandirian">
        </div>
        <div class="timeline-number">04</div>
        <div class="timeline-content">
          <h3> Otonomi & kemandirian</h3>
          <p>Koperasi mandiri; kerja sama luar tidak boleh mengurangi kendali anggota.</p>
        </div>
      </div>

       <div class="timeline-item">
        <div class="timeline-icon">
          <img src="download__3_-removebg-preview.png" alt="Pendidikan, pelatihan & informasi">
        </div>
        <div class="timeline-number">05</div>
        <div class="timeline-content">
          <h3>Pendidikan, pelatihan & informasi</h3>
          <p>MMeningkatkan pengetahuan anggota dan masyarakat tentang koperasi.</p>
        </div>
      </div>

       <div class="timeline-item">
        <div class="timeline-icon">
          <img src="png-transparent-social-group-delivering-happiness-photography-logo-social-group.png" alt="Kerja sama antar-koperasi ">
        </div>
        <div class="timeline-number">06</div>
        <div class="timeline-content">
          <h3>Kerja sama antar-koperasi </h3>
          <p>Koperasi saling memperkuat melalui jejaring lokal, nasional, hingga internasional.</p>
        </div>
      </div>

       <div class="timeline-item">
        <div class="timeline-icon">
          <img src="pngtree-community-care-logo-template-vector-png-image_5142001.png" alt="Kepedulian terhadap komunitas">
        </div>
        <div class="timeline-number">07</div>
        <div class="timeline-content">
          <h3>Kepedulian terhadap komunitas</h3>
          <p>Usaha koperasi memperhatikan pembangunan berkelanjutan dan kesejahteraan masyarakat.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<br>
<br>
<br>

<section class="struktur-organisasi" id="struktur-organisasi">
    <div class="container">
        <br>
        <br>
        <br>
        <h2>Struktur Organisasi</h2>
        <div class="organisasi-diagram">
            <img src="struktur organisasi.png" alt="Diagram Struktur Organisasi">
        </div>
    </div>
</section>
</body>
</html>
<!-- Legalitas KSP IKR -->
<section class="legalitas" id="legalitas">
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <br>
        <h2>Legalitas KSP IKR</h2>
        <div class="dokumen-container">
            
            <div class="dokumen-item">
                <div class="dokumen-icon">📄</div>
                <h3>NIB & Izin Usaha Simpan Pinjam Koperasi</h3>
                <p>Dokumen Akta Pendirian Koperasi yang dikeluarkan oleh Pemerintah</p>
                <?php if (isset($nib_file) && file_exists($nib_file)): ?>
                    <a href="javascript:void(0)" class="btn-detail" onclick="openPDF('<?= htmlspecialchars($nib_file); ?>')">
                        Lihat Selengkapnya
                    </a>
                <?php else: ?>
                    <p class="file-missing">⚠ File <strong>NIB_IZIN.pdf</strong> belum tersedia.</p>
                <?php endif; ?>
            </div>

            <!-- Card Sertifikat -->
            <div class="dokumen-item">
                <div class="dokumen-icon">📄</div>
                <h3>Izin Usaha Simpan Pinjam Koperasi</h3>
                <p>Dokumen Izin Usaha Simpan Pinjam Koperasi yang dikeluarkan oleh Pemerintah</p>
                <?php if (isset($sertifikat_file) && file_exists($sertifikat_file)): ?>
                    <a href="javascript:void(0)" class="btn-detail" onclick="openPDF('<?= htmlspecialchars($sertifikat_file); ?>')">
                        Lihat Selengkapnya
                    </a>
                <?php else: ?>
                    <p class="file-missing">⚠ File <strong>Sertifikat.pdf</strong> belum tersedia.</p>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>


<!-- Modal Viewer -->
<div id="pdfModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closePDF()">&times;</span>
    <iframe id="pdfViewer" src="" frameborder="0"></iframe>
    <button class="btn-close" onclick="closePDF()">Close</button>
  </div>
</div>

<!-- Program Kerja Section -->
<section id="program-kerja" style="padding:60px 20px; background:eafff1; text-align:center;">
  <div style="max-width:900px; margin:auto;">
    <h2 style="font-size:32px; font-weight:bold; margin-bottom:10px; color:#024c27;">Program Kerja</h2>
    <hr style="width:80px; height:3px; background:#00b050; border:none; margin:20px auto;">

    <ol style="text-align:left; line-height:1.8; font-size:18px; color:#555;">
      <li>Melakukan Literasi dan Edukasi tentang Perkoperasian, Koperasi Digital dan Inklusi Keuangan.</li>
      <li>Melakukan Kerjasama dengan Institusi Pemerintah, Institusi Swasta dan Kopkar/Kopeg sebagai Mitra Kerjasama Koperasi dalam rangka Inklusi Keuangan Koperasi berupa Layanan Simpan Pinjam Koperasi Digital KSP IKR untuk Pegawai/Karyawan/Anggota Kopkar/Anggota Kopeg pada Mitra Kerjasama.</li>
      <li>Melakukan kerjasama dengan stakeholders terkait yakni dengan Pemerintah melalui Kementerian/Lembaga terkait, pihak perbankan/lembaga keuangan lainnya maupun dengan lembaga terkait lainnya dalam rangka pengembangan usaha KSP IKR.</li>
      <li>Sebagai Koperasi Digital maka KSP IKR secara terus menerus melakukan pengembangan fitur Digitalisasi dan layanan digital baik back end (Core Cooperative System) maupun front end (Mobile Apps) sesuai perkembangan teknologi.</li>
      <li>Melakukan tata kelola KSP IKR secara best practice dengan mengacu kepada ketentuan perkoperasian di Indonesia dengan didukung oleh Sumber Daya Manusia (SDM) Koperasi yang kompeten, profesional dan berintegritas.</li>
      <li>KSP IKR menjadi salah satu Inkubasi Centre Koperasi Digital di Indonesia untuk segmen mikro dan ultra mikro.</li>
      <li>Meningkatkan Kesejahteraan Anggota melalui Bagi Hasil atas Pendapatan Administrasi Pinjaman yakni berupa SHU Bulanan Untuk Anggota Yang Memiliki Pinjaman dan Cadangan SHU Tahunan Untuk Anggota (SHU Tahun Berjalan).</li>
      <li>Memberikan manfaat dan benefit finansial untuk Manajemen dan Karyawan Mitra Kerjasama sebagai Anggota KSP IKR.</li>
    </ol>
  </div>
</section>

<!-- Hubungi Kami Section -->
<section id="hubungi-kami">
  <div class="container">
    <h2>Untuk bergabung menjadi Anggota KOPKAR IBR, Hubungi Kami:</h2>

    <p class="alamat">
      📍 Jl Danau Sunter Barat Blok A2 No.3, Sunter, Jakarta
    </p>
    <p class="kontak">
      📧 <a href="mailto:cs@kspikr.id">cs@kspikr.id</a> | 
      📱 0817 0693 689 | 
      🌐 <a href="https://kspikr.id" target="_blank">https://kspikr.id</a>
    </p>

    <div class="cta">
      <a href="#form-b2b" class="btn-b2b">
        Daftarkan Institusi Anda untuk Kerjasama B2B
      </a>
    </div>
  </div>

  <!-- Tombol Scroll ke Atas -->
  <a href="#top" class="scroll-top">↑</a>
</section>

</body>
</html>
