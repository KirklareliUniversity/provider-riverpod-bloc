<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Riverpod</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php include 'navbar.php'; ?> 

<div class="guzel">
    <main class="content">
           <p>
    <h3>Riverpod nasıl kullanılır?</h3>
    <p >⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯</p>
    <h4>Önce bir provider sınıfı oluşturulur.</h4>
    Bu sınıfta:</br>
    Hangi verinin tutulacağı yazılır (sayı, string, liste vb.),</br>
    Veriyi değiştirecek fonksiyonlar tanımlanır,</br>
    State değişince Riverpod bunu otomatik takip eder ve ilgili widget’ları yeniden oluşturur.</br>
</br>

    <h4>Riverpod uygulamanın en üstüne eklenmek zorunda değildir</h4>
    Bu nedenle context kullanılmadan veriye her yerden erişilebilir. </br>
    Riverpod widget ağacından tamamen bağımsız çalıştığı için, sayfa değişse bile veriler kaybolmaz ve korunmaya devam eder. </br>
    Ve veriye erişimde context kullanılmadığı için sayfalar arası geçişlerde veri dağılmaz veya sıfırlanmaz. </br>
    Uygulamanın farklı bölümleri aynı veriyi kolayca paylaşabilir.</br>

         <p >⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯</p>

          <h4>Riverpod Türleri</h4>
           <b>StateProvider:</b> Basit ve hızlı state yönetimi sağlar.</br>
           <b>StateNotifierProvider:</b> Daha büyük ve düzenli projelerde kullanılır.</br>
           <b>FutureProvider:</b> API gibi gelecekte gelecek veriler için kullanılır.</br>
           <b>StreamProvider:</b> Gerçek zamanlı veri akışları için idealdir.</br>
           <b>Provider:</b> Sabit (değişmeyen) değerler için.</br>

        <p >⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯</p>


    <h4>Avantajlar</h4>
    Widget ağacına bağımlı değildir.</br>
    Daha temiz ve test edilebilir bir yapı sunar.</br>
    Provider’lar arasındaki bağımlılıklar otomatik takip edilir.</br>
    Büyük projelerde düzenli bir yapı sağlar.</br>

    <h4>Dezavantajlar</h4>
    Provider’a göre daha detaylı bir öğrenme eğrisi vardır.</br>
    Yapısı daha gelişmiş olduğu için yeni başlayanlar için karışık gelebilir.</br>
    Yanlış provider override kullanımı karışıklığa yol açabilir.</br>
    Kod yapısı doğru organize edilmezse dosyalar fazla dağılabilir.</br>



    </p>
</div>
</main>
</body>
</html>


