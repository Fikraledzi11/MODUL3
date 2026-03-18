<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: halaman_login2.php");
    exit();
}
?>

 
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>
     <h1>Selamat datang, <?php echo $_SESSION['username']; ?>!</h1>
<div class="phone">
     <h1>Selamat Datang</h1>

    <div class="account">
         <button class="menu-btn" >
                <div class="back" onclick="location.href='akun3.html'">
                    <i class="fa-solid fa-user"></i>
                </div>
            </button>
    </div>

    <div class="menu">
        <div class="box big">
            <i class="fa-solid fa-bullhorn"></i>
            <span>Pengaduan</span>
        </div>

        <div class="box">
            <i class="fa-solid fa-gamepad"></i>
            <span>Games</span>
        </div>

        <div class="box">
            <i class="fa-solid fa-clock-rotate-left"></i>
            <span>Aktivitas</span>
        </div>
    </div>

    <div class="scanner">
        <i class="fa-solid fa-qrcode"></i>
    </div>
</div>
</script>
</body>
</html>
