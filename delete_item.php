<?php
require 'config.php';
if (!isset($_SESSION['user_id'])) { header('Location: login.php'); exit; }
$id = isset($_GET['id'])? (int)$_GET['id'] : 0;
if ($id>0) {
    $stmt = $mysqli->prepare('DELETE FROM items WHERE id=?');
    $stmt->bind_param('i',$id);
    $stmt->execute();
}
header('Location: dashboard.php');
exit;
?>