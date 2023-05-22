<!DOCTYPE html>
<html>
<head>
    <title>Sonuç 2</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Sonuç 2</h1>
    <?php
    $dogruCevaplar = array(
        'soru2' => 'php' // Soru 2'nin doğru cevabı
    );

    if (isset($_GET['soru2'])) {
        $cevap = $_GET['soru2'];
        $puan1 = isset($_GET['puan1']) ? intval($_GET['puan1']) : 0;
        $puan2 = ($cevap === $dogruCevaplar['soru2']) ? 1 : 0;
        $toplamPuan = $puan1 + $puan2;
        echo "<p>Toplam Puan: $toplamPuan</p>";
    }
    ?>
</body>
</html>
