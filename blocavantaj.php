<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>BloC</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include 'navbar.php'; ?> 

   <div class="guzel">
    <main class="content">
   <p>
    <h3>BloC nasıl kullanılır?</h3>
    <p >⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯</p>

        <h4>İlk olarak bir BLoC sınıfı oluşturulur.</h4>
        Bu sınıfta;</br>
        Hangi verinin tutulacağı belirlenir,</br>
        Veriyi değiştiren olaylar (event) tanımlanır,</br>
        Bu olaylar işlendiğinde yeni state değerleri üretilir.</br>

        <h4>BLoC uygulamanın en üstüne eklenmek zorunda değildir.</h4>
        Riverpod gibi context gerekmeden her yerden kullanılabilir.</br>
        Uygulama içinde farklı sayfalara geçilse bile BLoC’un tuttuğu veriler korunur.</br>
        En büyük özelliği;</br>
        Her değişiklikte yeni bir state üretilir ve UI sadece bu state’e göre güncellenir.</br>
        Bu sayede widget’lar gereksiz yere yenilenmez, performans artar.</br>

        <h4>Son olarak sayfalarda;</h4>
        BLoC’taki state değerleri okunur,</br>
        Kullanıcı bir işlem yaptığında ilgili event tetiklenir,</br>
        BLoC yeni state üretir ve ekran otomatik güncellenir.</br>

    <p >⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯</p>

        <h4>BloC Türleri</h4>
        <b>Bloc:</b> Event → State dönüşümü yapan temel yapı.</br>
        <b>Cubit:</b> Event kullanmadan doğrudan state yöneten, daha basit BLoC tipi.</br>
        <b>BlocProvider:</b> Bir BLoC’u uygulamanın belirli bir kısmına sağlar.</br>
        <b>BlocBuilder:</b> Sadece ilgili widget’ları günceller.</br>

    <p >⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯</p>

    <h4>Avantajlar</h4>
    Kod çok düzenli olur (iş mantısı UI’dan tamamen ayrılır).</br>
    Büyük projeler için en profesyonel state yönetimidir.</br>
    Event → State yapısı kontrolü kolaylaştırır.</br>
    Performansı artırır (yalnızca gereken yerler yenilenir).</br>
    Test edilmesi kolaydır.</br>

    <h4>Dezavantajlar</h4>
    Provider / Riverpod’a göre daha karmaşıktır.</br>
    Yeni başlayanlar için öğrenmesi daha zordur.</br>
    Kod yapısı daha uzundur (Event + State + Bloc sınıfları).</br>
    Küçük projelerde gereksiz olabilir.</br>


