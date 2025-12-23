1. Proje Amacı
-Bu proje, Flutter mobil uygulama geliştirme sürecinde kullanılan Provider, Riverpod ve BLoC durum yönetimi (State Management) yaklaşımlarını karşılaştırmalı ve uygulamalı olarak tanıtmak amacıyla hazırlanmıştır.
Her yaklaşım, aynı problem (basit bir sayaç uygulaması) üzerinden ele alınmış ve teknik farkları proje içerisinde açık şekilde gösterilmiştir.

2. Proje Yapısı
Proje, PHP tabanlı bir web uygulaması olarak geliştirilmiştir.
İçerik Yapısı;
-Provider, Riverpod ve BLoC için tanıtım sayfaları
-Her yaklaşım için ayrı kod inceleme sayfaları
-Aynı örnek (sayaç uygulaması) üzerinden hazırlanan uygulamalı örnekler
-Giriş yapan kullanıcılara özel Kod Öğrenimi alanı

3. Kullanıcı Kimlik Doğrulama (Auth)
Projede temel bir kullanıcı kimlik doğrulama sistemi bulunmaktadır.
Bu kapsamda;
-Kullanıcı kayıt, giriş ve çıkış işlemleri yapılabilmektedir.
-Şifreler password_hash() fonksiyonu kullanılarak güvenli biçimde saklanmaktadır.
-Oturum (Session) tabanlı yetkilendirme uygulanmıştır.
-Kod Öğrenimi sayfasına yalnızca giriş yapmış kullanıcılar erişebilmektedir.

4. Teknik Altyapı
Proje geliştirilirken aşağıdaki teknolojiler kullanılmıştır:
-Backend: PHP
-Veritabanı: MySQL
-Frontend: HTML5, CSS3
-Oturum Yönetimi: PHP Session

Flutter State Management Yaklaşımları:
-Provider (ChangeNotifier)
-Riverpod (StateProvider, StateNotifierProvider)
-BLoC (Event – State – Bloc yapısı)

5. Veritabanı Kullanımı
Projede kullanıcı bilgilerini tutmak amacıyla MySQL veritabanı kullanılmıştır.
Veritabanı, proje geliştirme sürecinde phpMyAdmin üzerinden oluşturulmuş ve kullanıcıların;
-kullanıcı adı,
-e-posta adresi,
-hash’lenmiş şifre bilgilerini,
tutacak şekilde yapılandırılmıştır.
Veritabanı bağlantısı config.php dosyası üzerinden sağlanmaktadır.

6. Projenin Kurulumu ve Çalıştırılması
Bu proje, yerel geliştirme ortamında XAMPP kullanılarak çalıştırılmıştır.
Proje klasörü, XAMPP kurulum dizini içerisindeki
htdocs klasörüne aşağıdaki isimle yerleştirilmiştir:

C:\xampp\htdocs\ileriwebdeneme

XAMPP Control Panel üzerinden Apache ve MySQL servisleri başlatılmıştır.
Projeye, web tarayıcısı üzerinden aşağıdaki adres kullanılarak erişilmiştir:

http://localhost/ileriwebdeneme

Veritabanı bağlantısı ve oturum yönetimi ayarları config.php dosyası üzerinden yapılmaktadır.

7. Arayüz ve Kullanılabilirlik
-Tüm sayfalarda ortak bir navbar yapısı kullanılmıştır
-Dropdown menüler ile sayfalar arası geçiş sağlanmaktadır
-Arayüz sade, anlaşılır ve kullanıcı dostudur
-Kod blokları açıklamalar ile birlikte sunulmuştur

8. Sonuç
Bu proje ile Flutter’da kullanılan Provider, Riverpod ve BLoC yaklaşımları;
-teknik prensipleri,
-uygulamalı örnekleri,
-güvenli ve stabil bir web altyapısı,

kapsamında karşılaştırmalı olarak sunulmuştur.

-**Kübra Celep**
