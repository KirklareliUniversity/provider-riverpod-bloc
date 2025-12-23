<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Riverpod Örneği</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<main class="content">
    <h2>Riverpod ile Sayaç Uygulaması</h2>

    <p>
        Riverpod, Provider’dan farklı olarak <strong>BuildContext</strong> gerektirmez.
        Bu örnekte <b>StateProvider</b> kullanılarak sayaç yönetimi yapılmıştır.
    </p>

<pre><code>
// Provider tanımı
final counterProvider = StateProvider&lt;int&gt;((ref) => 0);

// Kullanım
Consumer(
  builder: (context, ref, child) {
    final count = ref.watch(counterProvider);
    return Text(count.toString());
  },
);
</code></pre>

    <ul>
        <li>Context bağımlılığı yoktur</li>
        <li>Daha güvenli ve test edilebilirdir</li>
        <li>Orta ve büyük projeler için uygundur</li>
    </ul>
</main>

</body>
</html>
