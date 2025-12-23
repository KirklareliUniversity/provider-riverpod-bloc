<?php
require_once 'config.php'; // Veritabanı bağlantısı ($pdo) burada tanımlanır

// Zaten giriş yapmış bir kullanıcıyı ana sayfaya yönlendir (Kayıt olmasına gerek yok)
if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    $email = trim($_POST['email'] ?? '');

    // Basit doğrulamalar
    if (empty($username) || empty($password) || empty($email)) {
        $error = 'Lütfen tüm alanları doldurun.';
    } elseif (strlen($username) < 3) {
        $error = 'Kullanıcı adı en az 3 karakter olmalıdır.';
    } elseif (strlen($password) < 6) {
        $error = 'Şifre en az 6 karakter olmalıdır.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Geçerli bir e-posta adresi giriniz.';
    } else {
        // Şifreyi güvenli bir şekilde hash'le
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Kullanıcı adının daha önce alınıp alınmadığını kontrol et
        $stmt_check = $pdo->prepare("SELECT id FROM users WHERE username = ?");
        $stmt_check->execute([$username]);
        
        if ($stmt_check->rowCount() > 0) {
            $error = 'Bu kullanıcı adı zaten alınmış.';
        } else {
            // Veritabanına kaydetme
            $stmt = $pdo->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
            
            if ($stmt->execute([$username, $hashed_password, $email])) {
                $success = 'Kayıt işlemi başarılı! Şimdi <a href="login.php">Giriş</a> Yapabilirsiniz.';
            } else {
                $error = 'Kayıt işlemi sırasında bir hata oluştu.';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kayıt Ol</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Yeni Kullanıcı Kaydı</h2>
        <?php if ($error): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>
        <?php if ($success): ?>
            <p style="color: green;"><?php echo $success; ?></p>
        <?php endif; ?>

        <form method="POST">
            <label for="username">Kullanıcı Adı:</label>
            <input type="text" id="username" name="username" required>
            <small>Kullanıcı adınız en az 3 karakter olmalıdır.</small> </br>
            
            <label for="email">E-posta:</label>
            <input type="email" id="email" name="email" required> </br>
            
            <label for="password">Şifre:</label>
            <input type="password" id="password" name="password" required>
            <small>Şifreniz en az 6 karakter olmalıdır.</small>
            
            <button type="submit">Hemen Kayıt Ol</button>
        </form>
        <p>Zaten hesabınız var mı? <a href="login.php">Giriş Yap</a></p>
    </div>
</body>
</html>