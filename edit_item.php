<?php
require 'config.php';
if (!isset($_SESSION['user_id'])) { header('Location: login.php'); exit; }
$id = isset($_GET['id'])? (int)$_GET['id'] : 0;
if ($id<=0) { header('Location: dashboard.php'); exit; }
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = trim($_POST['code']);
    $name = trim($_POST['name']);
    $qty = (int)$_POST['qty'];
    $desc = trim($_POST['description']);
    $stmt = $mysqli->prepare('UPDATE items SET code=?, name=?, qty=?, description=? WHERE id=?');
    $stmt->bind_param('ssisi', $code, $name, $qty, $desc, $id);
    $stmt->execute();
    header('Location: dashboard.php');
    exit;
}
$res = $mysqli->prepare('SELECT code,name,qty,description FROM items WHERE id=?');
$res->bind_param('i',$id);
$res->execute();
$res->bind_result($code,$name,$qty,$desc);
$res->fetch();
?>
<!doctype html><html><head><meta charset="utf-8"><title>Edit Barang</title></head><body>
<h2>Edit Barang</h2>
<form method="post">
  <label>Kode: <input name="code" required value="<?=htmlspecialchars($code)?>"></label><br>
  <label>Nama: <input name="name" required value="<?=htmlspecialchars($name)?>"></label><br>
  <label>Qty: <input name="qty" type="number" value="<?=htmlspecialchars($qty)?>"></label><br>
  <label>Deskripsi:<br><textarea name="description"><?=htmlspecialchars($desc)?></textarea></label><br>
  <button type="submit">Update</button>
</form>
<p><a href="dashboard.php">Kembali</a></p>
</body></html>
