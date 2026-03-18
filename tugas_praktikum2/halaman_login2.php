<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? null;
    $password = $_POST['password'] ?? null;

    if ($username && $password) {
        $_SESSION['username'] = $username;
        $_SESSION['data'] = []; 
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Username dan password wajib diisi";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Registrasi Akun</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<body>
  <form method="post" action="halaman_login2.php" class="login-form" id="registerForm">
    <div class="phone">
      <h2 class="title">Registrasi Akun</h2>

      <div class="role-select">
        <button type="button" id="btnWarga">Warga</button>
        <button type="button" id="btnPetugas">Petugas</button>
      </div>

      <h3 id="roleTitle">Registrasi Warga</h3>

      <label>Username:</label>
      <input type="text" id="username" name="username" placeholder="Username" required>

      <label>Password:</label>
      <input type="password" id="password" name="password" placeholder="Password" required>

      <button type="submit" class="login-btn">Daftar</button>
    </div>
  </form>

  <script src="script2.js"></script>

  <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>

</body>
</html>