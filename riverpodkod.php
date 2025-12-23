<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Riverpod</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php include 'navbar.php'; ?> 

<div class="guzel">
    <main class="content">
    <h2>Riverpod Kod Örnekleri</h2>
    <p>Bu sayfada Riverpod'un farklı Provider tiplerini ve kullanımlarını inceleyeceğiz.</p>
    
    <section>
        <h2>StateNotifier ve StateNotifierProvider</h2>
        <p>Karmaşık durumları yönetmek için en çok tercih edilen yöntemdir. Durumu (State) değiştiren metotları barındırır.</p>
        <pre><code>
// 1. State Sınıfı
class Todo {
  final String id;
  final String description;
  final bool completed;
  // ... constructor ve copyWith metotları
}

// 2. Notifier Sınıfı
class TodosNotifier extends StateNotifier<List<Todo>> {
  TodosNotifier() : super([]); // Başlangıç durumu boş liste

  void addTodo(Todo todo) {
    state = [...state, todo]; // Durumu değiştirme
  }
}

// 3. Provider Tanımı
final todosProvider = StateNotifierProvider<TodosNotifier, List<Todo>>((ref) {
  return TodosNotifier();
});
        </code></pre>
    </section>
    
    <section>
        <h2>FutureProvider (Asenkron Veri)</h2>
        <p>Veritabanından veya API'den veri çekerken yükleme (Loading) ve hata (Error) durumlarını kolayca yönetmek için kullanılır.</p>
        <pre><code>
final apiData = FutureProvider<String>((ref) async {
  // Simüle edilmiş ağ çağrısı
  return await fetch('https://api.example.com/data');
});
        </code></pre>
    </section>
</main>

</body>
</html>