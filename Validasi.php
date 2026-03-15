<?php
include 'ValidasiForm.php';
echo "ini adalah isi halaman.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form sederhana dengan Validasi</title>
</head>
<body>
    <h2>Form input</h2>
    <form method="post" action="">
        Nama: <input type="text" name="name" value="<?php echo $name; ?>" >
        <span style="color: red;">* <?php echo $nameErr; ?></span>
        <br><br>

        Email: <input type= "email" name="email" value="<?php echo $email; ?>">
        <span style="color: red;">*<?php echo $emailErr; ?></span>
        <br><br>

        Password: <input type= "password" name="password" required>
        <span style="color: red;">* <?php echo $passwordErr; ?> </span>
        <br><br>

        <input type="submit" name="submit" value="kirim">
    </form>
</body>
</html>