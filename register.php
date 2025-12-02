<?php
require 'config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    if ($username === '' || $password === '') {
        $error = 'Isi username dan password.';
    } else {
        // simple unique check
        $stmt = $mysqli->prepare('SELECT id FROM users WHERE username = ?');
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $error = 'Username sudah digunakan.';
        } else {
            $hash = password_hash($password, PASSWORD_BCRYPT);
            $ins = $mysqli->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
            $ins->bind_param('ss', $username, $hash);
            if ($ins->execute()) {
                header('Location: login.php');
                exit;
            } else {
                $error = 'Gagal membuat akun.';
            }
        }
    }
}
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Register</title></head>
<body>
<h2>Register</h2>
<?php if(!empty($error)) echo '<p style="color:red;">'.htmlspecialchars($error).'</p>'; ?>
<form method="post">
  <label>Username: <input name="username" required></label><br>
  <label>Password: <input name="password" type="password" required></label><br>
  <button type="submit">Daftar</button>
</form>
<p><a href="login.php">Sudah punya akun? Login</a></p>
</body>
</html>
