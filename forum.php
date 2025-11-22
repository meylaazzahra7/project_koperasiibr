<?php
include "koneksi.php";

if (isset($_POST['submitQuestion'])) {
    $isi = mysqli_real_escape_string($conn, $_POST['isi_aspirasi']);
    $nama = "Anonim"; // bisa diganti kalau ada login
    $sql = "INSERT INTO aspirasi (nama_pengirim, isi_aspirasi, waktu) 
            VALUES ('$nama', '$isi', NOW())";
    mysqli_query($conn, $sql);

    // redirect agar tidak double submit saat refresh
    header("Location: forum.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Koperasi IBR - Forum Diskusi</title>
  <style>
    :root {
      --hijau: #28a745;
      --kuning: #ffc107;
      --putih: #ffffff;
      --abu: #f0f0f0;
    }
    * {margin:0; padding:0; box-sizing:border-box;}
    body {font-family: Arial, sans-serif; background:#f7f9fc;}

    header {background:#fff; box-shadow:0 2px 5px rgba(0,0,0,0.1);}
    .navbar {max-width:1200px; margin:auto; display:flex; justify-content:space-between; align-items:center; padding:15px 25px;}
    .logo {display:flex; align-items:center; gap:10px;}
    .logo img {width:50px;}
    .logo span {font-weight:bold; font-size:1.3rem; color:var(--hijau);}
    nav ul {list-style:none; display:flex; gap:25px;}
    nav a {text-decoration:none; color:#333; font-size:1rem;}
    nav a.active {color:var(--hijau); font-weight:bold;}

    .container {max-width:1100px; margin:40px auto; padding:0 25px;}
    .breadcrumb {color:#888; margin-bottom:15px; font-size:0.95rem;}
    h1 {margin-bottom:25px; font-size:2rem;}

    .search-bar {display:flex; align-items:center; background:var(--abu); border-radius:30px; padding:12px 18px; margin-bottom:20px;}
    .search-bar input {flex:1; border:none; background:transparent; outline:none; font-size:1rem;}

    .btn-ask {background:var(--kuning); border:none; padding:12px 25px; border-radius:6px; cursor:pointer; font-weight:bold; font-size:1rem; float:right; margin-bottom:25px;}

    .post {background:#fff; border-radius:12px; padding:25px; margin-bottom:25px; box-shadow:0 3px 7px rgba(0,0,0,0.08);}
    .post-header {font-weight:bold; font-size:1.1rem; margin-bottom:5px;}
    .post-time {color:#777; font-size:0.9rem; margin-bottom:15px;}
    .post-body {font-size:1.05rem; line-height:1.6;}
    .post-footer {margin-top:15px;}
    .icon-btn {background:#f0f0f0; border-radius:6px; padding:6px 12px; display:inline-block; font-size:0.95rem;}

    footer {background:limegreen; color:#fff; text-align:center; padding:20px; margin-top:50px; font-size:0.95rem;}

    /* MODAL */
    .modal {display:none; position:fixed; z-index:999; left:0; top:0; width:100%; height:100%; background:rgba(0,0,0,0.5);}
    .modal-content {background:#fff; margin:8% auto; padding:25px; width:450px; border-radius:10px; position:relative;}
    .modal h2 {margin-bottom:15px; font-size:1.3rem;}
    .close {position:absolute; top:10px; right:15px; font-size:22px; cursor:pointer;}
    .modal textarea {width:100%; height:100px; margin-bottom:15px; padding:10px; font-size:1rem;}
    .modal button {width:100%; padding:12px; background:var(--kuning); border:none; border-radius:6px; font-weight:bold; font-size:1rem; cursor:pointer;}
  </style>
</head>
<body>

<header>
  <div class="navbar">
    <div class="logo">
      <img src="logo2.png" alt="Logo">
      <span>KOPERASI IBR</span>
    </div>
    <nav>
      <ul>
        <li><a href="homepage.php">Beranda</a></li>
        <li><a href="#">Tentang Kami</a></li>
        <li><a href="kerjasama.php">Keanggotaan</a></li>
        <li><a href="forum.php" class="active">Forum</a></li>
        <li><a href="#">Berita</a></li>
        <li><a href="#">Galeri</a></li>
      </ul>
    </nav>
  </div>
</header>

<main class="container">
  <div class="breadcrumb">Home / Diskusi</div>
  <h1>Diskusi</h1>

  <div class="search-bar">
    <input type="text" id="searchInput" placeholder="Cari pertanyaan yang serupa">
  </div>
  <button class="btn-ask" id="openModal">Mulai Bertanya</button>

  <!-- List Post -->
  <div id="postList">
  <?php
  $result = mysqli_query($conn, "SELECT * FROM aspirasi ORDER BY id DESC");
  while($row = mysqli_fetch_assoc($result)){
      echo '<div class="post">
              <div class="post-header">'.htmlspecialchars($row['nama_pengirim']).'</div>
              <div class="post-time">'.$row['waktu'].'</div>
              <div class="post-body">'.htmlspecialchars($row['isi_aspirasi']).'</div>
              <div class="post-footer"><div class="icon-btn">❤ 0</div></div>
            </div>';
  }
  ?>
  </div>
</main>

<!-- Modal -->
<div id="askModal" class="modal">
  <div class="modal-content">
    <span class="close" id="closeModal">&times;</span>
    <h2>Kirim Pertanyaan</h2>
    <form method="POST" action="">
      <textarea name="isi_aspirasi" placeholder="Isi Pertanyaan..." required></textarea>
      <br>
      <button type="submit" name="submitQuestion">Kirim</button>
    </form>
  </div>
</div>

<footer>
  <p>&copy; 2025 Koperasi IBR. Semua Hak Dilindungi.</p>
</footer>

<script>
// Search Function
document.getElementById("searchInput").addEventListener("keyup", function() {
  let filter = this.value.toLowerCase();
  let posts = document.querySelectorAll("#postList .post");
  posts.forEach(post => {
    let text = post.innerText.toLowerCase();
    post.style.display = text.includes(filter) ? "" : "none";
  });
});

// Modal Function
let modal = document.getElementById("askModal");
let openBtn = document.getElementById("openModal");
let closeBtn = document.getElementById("closeModal");
openBtn.onclick = () => modal.style.display = "block";
closeBtn.onclick = () => modal.style.display = "none";
window.onclick = (e) => { if(e.target == modal) modal.style.display = "none"; }
</script>

</body>
</html>
