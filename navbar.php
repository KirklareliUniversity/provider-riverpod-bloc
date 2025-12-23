<?php
require_once 'config.php'; 
$is_logged_in = isset($_SESSION['user_id']);
$username = isset($_SESSION['username']) ? $_SESSION['username'] : ''; 
?>
<header>
    <nav class="navbar">
        <a href="index.php" class="logo">İleri Web Projesi</a>
        <ul class="nav-links">
            
            <li><a href="index.php">Anasayfa</a></li>  <!-- Burada alt menü olmayacak-->

            <li class="dropdown">
                <a href="provider.php">Provider Nedir?</a>
                <ul class="dropdown-content">       <!-- Alt menü açması için ekledik -->
                    <li><a href="providerkod.php">Kod Örneği</a></li>
                    <li><a href="provideravantaj.php">Nasıl kullanılır?</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="riverpod.php">Riverpod Nedir?</a>
                <ul class="dropdown-content">
                    <li><a href="riverpodkod.php">Kod Örneği</a></li>
                    <li><a href="riverpodavantaj.php">Nasıl kullanılır?</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="bloc.php">Bloc Nedir?</a>
                <ul class="dropdown-content">
                    <li><a href="blockod.php">Kod Örneği</a></li>
                    <li><a href="blocavantaj.php">Nasıl kullanılır?</a></li>
                </ul>
            </li>

            <?php if ($is_logged_in): ?>
            <li class="dropdown">
                <a href="#">Kod Öğrenimi</a>
                <ul class="dropdown-content">
                    <li><a href="providerornek.php">Provider Kod</a></li>
                    <li><a href="riverpodornek.php">Riverpod Kod</a></li>
                    <li><a href="blocornek.php">Bloc Kod</a></li>
                </ul>
            </li>
            <?php endif; ?>

            <?php if ($is_logged_in): ?>   <!-- Giriş yapıldıysa görünecek -->
                <li class="auth-btn"><a href="logout.php">Çıkış Yap (<?php echo htmlspecialchars($username); ?>)</a></li>
            <?php else: ?>     <!-- Giriş yapılmadıysa görünecek-->
                <li class="auth-btn"><a href="login.php">Giriş Yap</a></li>
                <li class="auth-btn"><a href="register.php">Kayıt Ol</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
