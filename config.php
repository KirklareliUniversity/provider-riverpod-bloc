<?php
// PHP Hata Gösterimini Açma 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// --- 1. Oturum Başlatma ---
// Oturum zaten başlamadıysa başlat
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// --- 2. Veritabanı Bağlantı Ayarları ---
// XAMPP varsayılan ayarlarıdır. Eğer farklı bir ayar yaptıysanız burayı güncelleyin.
define('DB_HOST', 'localhost'); // Sunucu adresi
define('DB_USER', 'root');     // Veritabanı kullanıcı adı
define('DB_PASS', '');         // Veritabanı şifresi
define('DB_NAME', 'test');   // Veritabanı adı

// --- 3. Veritabanı Bağlantısını Kurma (PDO) ---
global $pdo; // $pdo değişkenini global olarak tanımlıyoruz

try {
    // PDO (PHP Data Objects) kullanarak bağlantı kurma
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
    
    // Hata modunu istisna (exception) olarak ayarla. Bu, hata oluştuğunda PHP'nin durmasını sağlar.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // Bağlantı hatası durumunda ekranı durdur ve hatayı göster
    die("Veritabanı bağlantı hatası: " . $e->getMessage());
}

// --- 4. Veritabanı Tabanlı Kullanıcı Doğrulama Fonksiyonu ---
/**
 * Kullanıcı adı ve şifreyi veritabanında kontrol eder.
 * @param string $username Kullanıcı adı
 * @param string $password Girilen şifre
 * @param PDO $pdo PDO veritabanı bağlantısı
 * @return array|false Eğer giriş başarılıysa kullanıcı verilerini, aksi halde false döndürür.
 */
function check_login($username, $password, $pdo) {
    // SQL Injection'ı önlemek için hazır ifade (Prepared Statement) kullanıyoruz.
    $stmt = $pdo->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Kullanıcı bulunduysa ve şifre hash'i doğrulandıysa
    if ($user && password_verify($password, $user['password'])) {
        return $user; // Kullanıcı bilgilerini geri döndür
    }
    return false;
}
?>