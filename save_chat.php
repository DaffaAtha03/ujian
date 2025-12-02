<?php
require 'config.php';
if (!isset($_SESSION['user_id'])) { header('Location: login.php'); exit; }
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = trim($_POST['message']);
    $uid = $_SESSION['user_id'];
    if ($msg !== '') {
        $stmt = $mysqli->prepare('INSERT INTO chats (user_id, message) VALUES (?, ?)');
        $stmt->bind_param('is', $uid, $msg);
        $stmt->execute();
    }
}
header('Location: dashboard.php');
exit;
?>