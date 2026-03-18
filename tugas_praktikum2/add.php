<?php
session_start();
if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = [];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['item'])) {
    $_SESSION['data'][] = $_POST['item'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="add.css">
</head>
<body>
  <div class="card">
    <h1>Selamat datang, <?php echo $_SESSION['username']; ?>!</h1>

    <!-- Form Create -->
    <form method="post">
      <input type="text" name="item" placeholder="Tambah data baru" required>
      <button type="submit">Tambah</button>
    </form>

    <!-- Read -->
    <h3>Data yang sudah ditambahkan:</h3>
    <ul>
      <?php foreach ($_SESSION['data'] as $d): ?>
        <li><?php echo htmlspecialchars($d); ?></li>
      <?php endforeach; ?>
    </ul>

    <a href="logout.php" class="logout">Logout</a>
  </div>
</body>
</html>

