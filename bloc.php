<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php include 'navbar.php'; ?> 
    <main class="content">
        <h3>BloC Nedir?</h3>
        <p>
        &nbsp; BLoC (Business Logic Component), Flutter uygulamalarında durumu (state) yönetmek için kullanılan güçlü bir mimaridir.</br>
        Uygulamadaki iş mantığını (veri işlemleri, hesaplamalar, durum yönetimi) kullanıcı arayüzünden tamamen ayırır.</br>
        Bu yapı sayesinde kod daha düzenli, daha okunabilir ve çok daha profesyonel hâle gelir.</br>
        BLoC’un temel mantığı, verilerin Event → State akışıyla yönetilmesidir.</br>
        Kullanıcı bir olay (event) tetikler, BLoC bu olayı işler ve yeni bir durum (state) üretir.
        Bu süreç tamamen kontrollü ilerlediği için uygulama daha kararlı ve hatasız olur.</br>

        Ayrıca Cubit adı verilen daha basit bir BLoC türü sayesinde, event yazmadan direkt state değişimi yapılabilir.</br>
        Bu da küçük ve orta ölçekli yapılarda geliştiricilere hız ve esneklik sağlar.</br>

        <p >⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯</p>
        <div class="kulalan">

        <h3>Kullanım Alanları</h3>
        <b>Kontrollü ve düzenli veri yönetimi</b></br>
        BLoC yapısı, veri değişimlerini tamamen kontrol altına alır;</br>
        Kullanıcı bir event gönderir,</br>
        BLoC bunu işler,</br>
        Yeni bir state üretir.</br>
        Bu akış sayesinde hangi verinin nasıl değiştiği her zaman nettir.</br>
        Karmaşık iş mantıkları için ideal bir yapıdır.</br>
        </br>

        <b>UI’dan bağımsız iş mantığı</b></br>
        BLoC, Flutter widget ağacına bağımlı değildir.</br>
        Bu nedenle;</br>
        Veriye erişmek için context gerekmez,</br>
        Sayfa değişse bile state korunur,</br>
        İş mantığı (logic) ve arayüz (UI) tamamen ayrıldığı için kod çok daha kolay yönetilir.</br>
        Bu yaklaşım özellikle büyük projelerde uygulamanın bakımı ve geliştirilmesi açısından çok büyük avantaj sağlar.</br>
        </br>

        <b>Gerçek zamanlı veri ve form yönetimi</b></br>
        BLoC, akış (Stream) tabanlı çalıştığı için gerçek zamanlı veri işleme senaryolarında mükemmel sonuç verir;</br>
        Anlık güncellemeler,</br>
        Canlı veri akışları,</br>
        Form doğrulamaları,</br>
        API’den gelen verilerin işlenmesi,</br>
        Kullanıcı her etkileşim yaptığında UI anında güncellenir.</br>

        </div>
        <p >⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯</p>

        &nbsp; Bu başlıkların yanı sıra, BLoC mimarisi özellikle orta ve büyük ölçekli projelerde tercih edilir.
        Event–State yapısı sayesinde uygulamanın veri akışı tamamen kontrol altına alınır, her değişiklik belirli 
        kurallara göre gerçekleşir ve hata oranı büyük ölçüde azalır. Stream tabanlı mimarisi gerçek zamanlı verileri 
        yönetmeyi kolaylaştırırken, Cubit yapısı ile daha basit veri işlemleri hızlıca çözülebilir. Çok sayıda 
        ekranın aynı state’i paylaştığı yapılarda, karmaşık formların doğrulanmasında, API verilerinin yönetilmesinde 
        ve modüler mimari gerektiren projelerde BLoC, geliştiricilere hem yüksek performans hem de mükemmel bir düzen sağlar.
        </p>
    </main>
</body>
</html>