<?php
require_once 'config.php'; // $pdo bağlantısı ve check_login fonksiyonu config.php'den gelir

// Zaten giriş yapmışsa ana sayfaya yönlendir
if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // FONKSİYONU GÜNCELLEDİK: check_login fonksiyonuna $pdo bağlantısını gönderiyoruz
    // Fonksiyon, başarılı olursa kullanıcının tüm verilerini (ID dahil) döndürür.
    global $pdo; // $pdo'yu global kapsamdan alıyoruz
    $user_data = check_login($username, $password, $pdo); 

    if ($user_data) {
        // Giriş başarılı
        // SESSION'A KULLANICININ ID'SİNİ KAYDEDİYORUZ (Güvenli yöntem)
        $_SESSION['user_id'] = $user_data['id']; 
        // İsteğe bağlı olarak kullanıcı adını da saklayabiliriz (örn: "Hoş Geldin, Admin!")
        $_SESSION['username'] = $user_data['username']; 
        
        header('Location: index.php');
        exit;
    } else {
        // Giriş başarısız
        $error = 'Kullanıcı adı veya şifre hatalı.';
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div class="login-container">
        <h2>Giriş Yap</h2>
        <?php if ($error): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST">
            <label for="username">Kullanıcı Adı:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Şifre:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Giriş Yap</button>
        </form>
        <p>Hesabınız yok mu? <a href="register.php">Kayıt Ol</a></p>
    </div>
</body>
</html>