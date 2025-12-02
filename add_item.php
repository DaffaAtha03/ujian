<?php
require 'config.php';
if (!isset($_SESSION['user_id'])) { header('Location: login.php'); exit; }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = trim($_POST['code']);
    $name = trim($_POST['name']);
    $qty = (int)$_POST['qty'];
    $desc = trim($_POST['description']);
    $stmt = $mysqli->prepare('INSERT INTO items (code, name, qty, description) VALUES (?, ?, ?, ?)');
    $stmt->bind_param('ssis', $code, $name, $qty, $desc);
    if ($stmt->execute()) {
        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'Gagal menambahkan barang. Pastikan kode unik.';
    }
}
?>
<!doctype html>
<html><head><meta charset="utf-8"><title>Tambah Barang</title></head><body>
<h2>Tambah Barang</h2>
<?php if(!empty($error)) echo '<p style="color:red;">'.htmlspecialchars($error).'</p>'; ?>
<form method="post">
  <label>Kode: <input name="code" required></label><br>
  <label>Nama: <input name="name" required></label><br>
  <label>Qty: <input name="qty" type="number" value="0" required></label><br>
  <label>Deskripsi: <br><textarea name="description"></textarea></label><br>
  <button type="submit">Simpan</button>
</form>
<p><a href="dashboard.php">Kembali</a></p>
</body></html>
