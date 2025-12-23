<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Provider Örneği</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<main class="content">
    <h2>Provider ile Sayaç Uygulaması</h2>

    <p>
        Bu örnekte <strong>Provider</strong> kullanılarak basit bir sayaç uygulaması
        geliştirilmiştir. Butona basıldığında sayaç değeri artar ve ilgili widget
        yeniden çizilir.
    </p>

<pre><code>
// Counter Model
class Counter with ChangeNotifier {
  int count = 0;

  void increment() {
    count++;
    notifyListeners();
  }
}

// Kullanım
ChangeNotifierProvider(
  create: (_) => Counter(),
  child: Consumer&lt;Counter&gt;(
    builder: (context, counter, child) => Text(
      counter.count.toString(),
    ),
  ),
);
</code></pre>

    <ul>
        <li>ChangeNotifier ile state tutulur</li>
        <li>notifyListeners() ile arayüz güncellenir</li>
        <li>Küçük projeler için uygundur</li>
    </ul>
</main>

</body>
</html>
