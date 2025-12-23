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

        <h2>Provider Kod Örnekleri</h2>
        <p>Bu sayfada Provider kullanılarak oluşturulan basit bir sayaç uygulamasının temel yapısını inceleyeceğiz.</p>

        <!-- 1. SECTION -->
        <section>
            <h3>1. Veri Modeli (ChangeNotifier)</h3>
            <p>
                Bu sınıf, uygulamanın durumunu (state) tutar.
                <code>ChangeNotifier</code> sayesinde durum değiştiğinde arayüz bilgilendirilir.
            </p>

            <pre><code>
// lib/models/sayac_modeli.dart

import 'package:flutter/foundation.dart';

// ChangeNotifier, bu modeldeki değişiklikleri dinleyicilere bildirir.
class SayacModeli extends ChangeNotifier {
  int _sayac = 0;

  int get sayac => _sayac;

  void artir() {
    _sayac++;
    // Dinleyen tüm widget'ların yeniden çizilmesini sağlar
    notifyListeners();
  }
}
            </code></pre>
        </section>

        <!-- 2. SECTION -->
        <section>
            <h3>2. Widget Üzerinden Kullanım</h3>
            <p>
                Bu bölümde Provider ile modele nasıl erişildiği gösterilmektedir.
                <code>watch</code> ve <code>read</code> kullanım farkı özellikle önemlidir.
            </p>

            <pre><code>
// Sayaç değerini dinler (değişince widget yeniden çizilir)
final sayacDegeri = context.watch<SayacModeli>().sayac;

// Sadece metodu çağırır (widget yeniden çizilmez)
ElevatedButton(
  onPressed: () {
    context.read<SayacModeli>().artir();
  },
  child: const Text('Artır'),
);
            </code></pre>
        </section>

    </main>
</div>

</body>
</html>
