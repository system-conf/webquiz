<!DOCTYPE html>
<html>
<head>
    <title>Sonuç 1</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Sonuç 1</h1>
    <?php
    $dogruCevaplar = array(
        'soru1' => 'html', // Soru 1'in doğru cevabı
    );

    if (isset($_GET['soru1'])) {
        $cevap = $_GET['soru1'];
        $puan = ($cevap === $dogruCevaplar['soru1']) ? 1 : 0;
        echo "<p>Toplam Puan: $puan</p>";
    }
    ?>
    <form action="sonuc2.php" method="get">
        <input type="hidden" name="puan1" value="<?php echo $puan; ?>">
        <input type="submit" value="Sonraki Soru">
    </form>
</body>
</html>
