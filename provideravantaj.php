<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Provider</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include 'navbar.php'; ?> 

   <div class="guzel">
    <main class="content">
   <p>
    <h3>Provider nasıl kullanılır?</h3>
    <p >⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯</p>

    <h4>İlk olarak veriyi tutacak bir sınıf oluşturulur.</h4>
    Bu sınıfta;</br>
    Hangi verinin tutulacağı yazılır (sayı, kullanıcı bilgisi, liste vb.)</br>
    Veriyi değiştirecek fonksiyonlar olur</br>
    Bir şey değişince ekranın güncellenmesi için notifyListeners() çalışır</br>
    -Bu sınıf Provider’ın temel yapı taşıdır.

    <h4>Provider uygulamanın en üstüne eklenir.</h4>
    Provider böylece tüm uygulamayı sarar. Ve kullanımı daha kolay olur.</br>
    Provider’daki veriye her sayfa erişebilir.</br>
    Sayfa değiştirdiğinde veri kaybolmaz.

    <h4>Son olarak da sayfalarda;</h4>
    Provider’daki veriler okunur,</br>
    Değişiklik yapılır,</br>
    Ve ekran otomatik olarak güncellenir.
    <p >⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯</p>

    <h4>Provider Türleri</h4>
    <b>ChangeNotifierProvider:</b> En çok kullanılan tiptir. Basit veri yönetimi için kullanılır.</br>
    <b>MultiProvider:</b> Uygulamada birden fazla Provider varsa hepsini aynı yere eklemek için kullanılır.</br>
    <b>Consumer:</b> Sadece belirli widget’ların güncellenmesini sağlar ve tüm sayfayı değil sadece ilgili kısmı yeniler.
        <p >⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯</p>


    <h4>Avantajlar</h4>
    Kod düzenli olur</br>
    Büyük projelerde yönetimi kolaylaştırır</br>
    Sayfalar arası veri taşımaya gerek kalmaz</br>
    setState (ekran güncellemesi) kullanımını azaltır</br>
    Performansı artırır (gereksiz widget yenilemez)

    <h4>Dezavantajlar</h4>
    Provider sayısı arttıkça kodun takibi zorlaşabilir.</br>
    notifyListeners() gereksiz widget yenilemesine yol açabilir.</br>
    Runtime hataları riski yüksektir.</br>
    Veriye erişim için widget ağacının konumuna bağımlıdır.</br>
   </p>

    </div>

</body>
</html>
    </main>