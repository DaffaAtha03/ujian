<?php
require 'config.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
// fetch items
$result = $mysqli->query('SELECT * FROM items ORDER BY created_at DESC');
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Dashboard</title></head>
<body>
<h2>Dashboard - Welcome <?=htmlspecialchars($_SESSION['username'])?></h2>
<p><a href="add_item.php">Tambah Barang</a> | <a href="logout.php">Logout</a></p>

<form method="get" action="dashboard.php">
  <input name="q" placeholder="Cari barang..." value="<?=isset($_GET['q'])?htmlspecialchars($_GET['q']):''?>">
  <button type="submit">Cari</button>
</form>

<table border="1" cellpadding="6" cellspacing="0">
  <tr><th>ID</th><th>Kode</th><th>Nama</th><th>Qty</th><th>Aksi</th></tr>
  <?php while($row = $result->fetch_assoc()): ?>
  <tr>
    <td><?= $row['id'] ?></td>
    <td><?= htmlspecialchars($row['code']) ?></td>
    <td><?= htmlspecialchars($row['name']) ?></td>
    <td><?= $row['qty'] ?></td>
    <td>
      <a href="edit_item.php?id=<?= $row['id'] ?>">Edit</a> |
      <a href="delete_item.php?id=<?= $row['id'] ?>" onclick="return confirm('Hapus?')">Hapus</a>
    </td>
  </tr>
  <?php endwhile; ?>
</table>

<h3>Chat</h3>
<form id="chatForm" method="post" action="save_chat.php">
  <textarea name="message" required></textarea><br>
  <button type="submit">Kirim</button>
</form>

</body>
</html>
