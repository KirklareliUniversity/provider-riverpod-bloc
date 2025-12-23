<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>BLoC Örneği</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<main class="content">
    <h2>BLoC ile Sayaç Uygulaması</h2>

    <p>
        BLoC mimarisinde state değişimleri <strong>Event</strong> ve
        <b>State</b> yapıları üzerinden kontrol edilir.
        Aynı sayaç örneği için daha fazla yapı gereklidir.
    </p>

<pre><code>
// Event
abstract class CounterEvent {}
class Increment extends CounterEvent {}

// State
class CounterState {
  final int count;
  CounterState(this.count);
}

// Bloc
class CounterBloc extends Bloc&lt;CounterEvent, CounterState&gt; {
  CounterBloc() : super(CounterState(0)) {
    on&lt;Increment&gt;((event, emit) {
      emit(CounterState(state.count + 1));
    });
  }
}
</code></pre>

    <ul>
        <li>Event – State ilişkisi vardır</li>
        <li>Daha fazla kod yazılır</li>
        <li>Büyük ve kurumsal projeler için uygundur</li>
    </ul>
</main>

</body>
</html>
