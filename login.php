<?php
session_start();
include "koneksi.php"; // file koneksi ke MySQL

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $role = $_POST['role'];

    if ($role == "anggota") {
        $query = "SELECT * FROM anggota WHERE email_anggota='$email' LIMIT 1";
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);

        if ($user && password_verify($password, $user['password_anggota'])) {
            $_SESSION['id_anggota'] = $user['id_anggota'];
            $_SESSION['email_anggota'] = $user['email_anggota'];
            $_SESSION['role'] = "anggota";
            header("Location: homepage.php");
            exit();
        } else {
            $error = "Email atau Password salah!";
        }
    } elseif ($role == "admin") {
        $query = "SELECT * FROM admin WHERE email_admin='$email' LIMIT 1";
        $result = mysqli_query($conn, $query);
        $admin = mysqli_fetch_assoc($result);

        if ($admin && $password === $admin['password_admin']) {
            $_SESSION['id_admin'] = $admin['id_admin'];
            $_SESSION['email_admin'] = $admin['email_admin'];
            $_SESSION['role'] = "admin";
            header("Location: admin/dashboard.php");
            exit();
        } else {
            $error = "Email atau Password salah!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: url('backgroundlogin.png') no-repeat center center fixed;
        background-size: cover;
        position: relative;
    }
    body::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }
    .login-container {
        position: relative;
        z-index: 2;
        width: 350px;
        background: rgba(255, 255, 255, 0.95);
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 6px 20px rgba(0,0,0,0.3);
        text-align: center;
        animation: fadeIn 0.8s ease-in-out;
    }
    h2 {
        margin-bottom: 20px;
        color: #024c27;
    }
    input[type="email"], 
    input[type="password"] {
        width: 100%;
        padding: 12px;
        margin: 10px 0;
        border: 2px solid #028a3d;
        border-radius: 25px;
        outline: none;
        text-align: center;
        font-size: 14px;
        height: 44px;
        box-sizing: border-box;
    }
    /* Custom dropdown */
    .dropdown {
        position: relative;
        margin: 10px 0;
    }
    .dropdown button {
        width: 100%;
        padding: 12px;
        border: 2px solid #028a3d;
        border-radius: 25px;
        background: #fff;
        font-size: 14px;
        cursor: pointer;
        text-align: center;
        height: 44px;
    }
    .dropdown button:after {
        content: "▼";
        position: absolute;
        right: 20px;
        font-size: 12px;
        color: #028a3d;
    }
    .dropdown-content {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: white;
        border: 2px solid #028a3d;
        border-radius: 10px;
        box-shadow: 0 6px 15px rgba(0,0,0,0.2);
        z-index: 10;
    }
    .dropdown-content div {
        padding: 10px;
        cursor: pointer;
        transition: 0.2s;
    }
    .dropdown-content div:hover {
        background: #e6f9ef;
    }
    input[type="submit"] {
        width: 100%;
        padding: 12px;
        margin-top: 15px;
        background: #028a3d;
        border: none;
        color: white;
        font-size: 16px;
        border-radius: 25px;
        cursor: pointer;
        transition: 0.3s;
    }
    input[type="submit"]:hover {
        background: #026b2f;
    }
    .error {
        color: red;
        margin-top: 10px;
    }
    .links {
        margin-top: 15px;
        font-size: 14px;
    }
    .links a {
        color: #028a3d;
        text-decoration: none;
    }
</style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST">
            <!-- dropdown role -->
            <div class="dropdown">
                <button type="button" id="roleBtn">Pilih Role</button>
                <div class="dropdown-content" id="roleOptions">
                    <div data-value="anggota">Anggota</div>
                    <div data-value="admin">Admin</div>
                </div>
            </div>
            <input type="hidden" name="role" id="roleInput" required>

            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="Login">
        </form>
        <?php if ($error) echo "<p class='error'>$error</p>"; ?>
        <div class="links">
            <a href="register.php">Belum punya akun? Daftar</a><br>
            <a href="forgot.php">Lupa Password?</a>
        </div>
    </div>

<script>
    const roleBtn = document.getElementById("roleBtn");
    const roleOptions = document.getElementById("roleOptions");
    const roleInput = document.getElementById("roleInput");

    roleBtn.addEventListener("click", () => {
        roleOptions.style.display = 
            roleOptions.style.display === "block" ? "none" : "block";
    });

    document.querySelectorAll("#roleOptions div").forEach(option => {
        option.addEventListener("click", () => {
            roleBtn.textContent = option.textContent;
            roleInput.value = option.getAttribute("data-value");
            roleOptions.style.display = "none";
        });
    });

    // klik di luar dropdown nutup menu
    document.addEventListener("click", (e) => {
        if (!e.target.closest(".dropdown")) {
            roleOptions.style.display = "none";
        }
    });
</script>
</body>
</html>
