<!DOCTYPE html>
<html>
<head>
    <title>Sonuç</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Sonuç</h1>
    <?php
    $dogruCevaplar = array(
        'soru1' => array('html', 'css', 'js'), // Soru 1'in doğru cevapları
        'soru2' => array('php') // Soru 2'nin doğru cevapları
    );

    $puan = 0;

    // Soru 1'in cevaplarını kontrol et
    if (isset($_POST['soru1'])) {
        $cevaplar1 = $_POST['soru1'];
        $puan += kontrolEt($cevaplar1, $dogruCevaplar['soru1'], 'soru1');
    }

    // Soru 2'nin cevaplarını kontrol et
    if (isset($_POST['soru2'])) {
        $cevaplar2 = $_POST['soru2'];
        $puan += kontrolEt($cevaplar2, $dogruCevaplar['soru2'], 'soru2');
    }

    echo "<p>Toplam Puan: $puan</p>";

    function kontrolEt($cev
