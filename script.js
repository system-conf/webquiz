function sonucuGoster() {
    var soru1Cevaplar = document.querySelectorAll('input[name="soru1[]"]:checked');
    var soru2Cevaplar = document.querySelectorAll('input[name="soru2[]"]:checked');

    var dogruCevaplar = {
        soru1: ['html', 'css', 'js'],
        soru2: ['php']
    };

    var puan = 0;

    if (soru1Cevaplar.length === dogruCevaplar.soru1.length) {
        var dogru = true;
        for (var i = 0; i < soru1Cevaplar.length; i++) {
            if (dogruCevaplar.soru1.indexOf(soru1Cevaplar[i].value) === -1) {
                dogru = false;
                break;
            }
        }
        if (dogru) {
            puan++;
        }
    }

    if (soru2Cevaplar.length === dogruCevaplar.soru2.length) {
        var dogru = true;
        for (var i = 0; i < soru2Cevaplar.length; i++) {
            if (dogruCevaplar.soru2.indexOf(soru2Cevaplar[i].value) === -1) {
               
