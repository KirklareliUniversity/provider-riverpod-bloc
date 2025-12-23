<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php include 'navbar.php'; ?> 
    <main class="content">
       <h3>Riverpod Nedir?</h3>
       <p>
        &nbsp;Riverpod, Flutter uygulamalarında durumu (state) yönetmek için kullanılan gelişmiş ve modern bir yapıdır. </br>
        Provider’ın geliştirilmiş hâli gibi düşünülebilir ancak çok daha güvenli, hızlı, bağımsız ve test edilebilir bir mimari sunar.</br>
        Riverpod’un temel mantığı, veriyi sağlayan (provider) yapıların Flutter widget ağacından tamamen bağımsız olmasıdır. </br>
        Bu sayede veriye ulaşmak için context’e bağlı kalınmaz; kod daha esnek, hatasız ve taşınabilir hâle gelir.</br>

        Ayrıca hangi widget’ın hangi veriyi dinlediği otomatik olarak takip edilir. </br>
        Gereksiz yenilemeler engellenir ve performans yüksek tutulur.

        <p >⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯</p>
        <div class="kulalan">

        <h3>Kullanım Alanları</h3>
        <b>Widget ağacından tamamen bağımsız veri yönetimi</b></br>
        Riverpod’da provider’lar widget ağacına bağlı olmadığı için:</br>
        Verilere her yerden erişilebilir (context gerekmez),</br>
        Sayfa değişse bile state aynı şekilde korunur,</br>
        Kodlar daha taşınabilir hâle gelir.</br>
           </br>

        <b>AsyncValue ile gelişmiş API yönetimi</b></br>
        API’den veri çekerken; loading, error, data gibi durumlar çok kolay yönetilir.</br>
        Provider’da bu yapıyı elle kurmak gerekir → Riverpod’da hazırdır.</br>
        </br>
     
        <b>Otomatik bağımlılık yönetimi (Dependency Tracking)</b></br>
        Riverpod, provider’ların birbirine olan bağımlılıklarını otomatik olarak takip eder</br>
        Bir provider başka bir provider’dan veri alıyorsa;</br>
        Alttaki provider değiştiğinde,</br>
        Üstteki provider da otomatik güncellenir.</br>
        Bu sayede büyük projelerde veri akışı çok daha güvenli ve kontrollü olur.</br>
        </br>

        </div>
        <p >⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯</p>

 
        &nbsp; Bu başlıkların yanı sıra, Riverpod da uygulamanın genel yapısı, veri akışının karmaşıklığı ve 
        modüller arasındaki bağımlılık ilişkilerine göre çok farklı senaryolarda tercih edilebilir. 
        Özellikle widget ağacından bağımsız çalışabilmesi, async işlemleri yönetmeyi kolaylaştırması ve 
        Provider’lar arasındaki bağımlılıkları otomatik olarak takip etmesi sayesinde orta ve büyük ölçekli 
        projelerde oldukça güçlü bir çözüm sunar. Gerçek zamanlı verilerin işlendiği yapılarda, API’den gelen 
        yükün yönetilmesinde, çok sayıda ekranın aynı veriyi paylaştığı durumlarda ve karmaşık iş mantıklarının 
        oluşturulduğu projelerde Riverpod, geliştiricilere hem esneklik hem de yüksek performans sağlar.
       </p>

    </main>
</body>
</html>