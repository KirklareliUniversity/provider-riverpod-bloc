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
    <h2>BLoC: Events, States ve Stream Mimarisi</h2>
    <p>BLoC, iş mantığını test etmeyi kolaylaştıran, olay tabanlı bir mimari sunar.</p>
    
    <section>
        <h2>BLoC'un Üç Temel Parçası</h2>
        <ul>
            <li>**Event (Olay):** Kullanıcının veya sistemin gerçekleştirdiği eylem (Örn: `ButtonPressEvent`).</li>
            <li>**BLoC/Cubit:** Event'i alır, iş mantığını yürütür ve yeni bir State yayar.</li>
            <li>**State (Durum):** Kullanıcı arayüzünün güncel durumu (Örn: `LoadingState`, `LoadedState`).</li>
        </ul>
        <p>Bu mimari, durum yönetimini öngörülebilir ve izlenebilir hale getirir.</p>
    </section>
    
    <section>
        <h2>Basit Sayaç BLoC Örneği</h2>
        <p>Bir arttırma (Increment) olayına tepki veren basit bir BLoC:</p>
        <pre><code>
// 1. Olaylar (Events)
abstract class CounterEvent {}
class CounterIncrementEvent extends CounterEvent {}

// 2. BLoC (İş Mantığı)
class CounterBloc extends Bloc<CounterEvent, int> {
  // Başlangıç durumu 0
  CounterBloc() : super(0) {
    // Event'i State'e dönüştüren işleyici
    on<CounterIncrementEvent>((event, emit) {
      emit(state + 1); // Yeni State'i yayınla
    });
  }
}

// 3. Widget'ta Kullanım
// BlocProvider, BlocBuilder gibi bileşenlerle kullanılır.
        </code></pre>
    </section>
</main>
</body>
</html>