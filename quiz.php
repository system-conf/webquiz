<!DOCTYPE html>
<html>
<head>
  <title>Quiz Sonuçları</title>
</head>
<body>
  <h1>Quiz Sonuçları</h1>

  <?php
  // Doğru cevaplar
  $correctAnswers = array(
    "answer1" => "Ankara",
    "answer2" => "Nil",
    "answer3" => "Dünya"
  );

  // Kullanıcının cevapları
  $userAnswers = array(
    "answer1" => $_POST['answer1'],
    "answer2" => $_POST['answer2'],
    "answer3" => $_POST['answer3']
  );

  // Sonuçları kontrol etme
  $score = 0;
  foreach ($correctAnswers as $question => $correctAnswer) {
    if ($userAnswers[$question] == $correctAnswer) {
      $score++;
    }
  }

  // Sonuçları yazdırma
  echo "<p>Toplam doğru cevap sayısı: $score / 3</p>";
  ?>

</body>
</html>
