function sonucuGoster() {
    var soru1 = document.getElementsByName('soru1[]');
    var soru2 = document.getElementsByName('soru2[]');

    var dogruCevaplar = {
        soru1: ['html', 'css', 'js'],
        soru2: ['php']
    };

    var puan = 0;

    for (var i = 0; i < soru1.length; i++) {
        if (soru1[i].checked && dogruCevaplar.soru1.includes(soru1[i].value)) {
            puan++;
        }
    }

    for (var i = 0; i < soru2.length; i++) {
        if (soru2[i].checked && dogruCevaplar.soru2.includes(soru2[i].value)) {
            puan++;
        }
    }

    var sonucDiv = document.getElementById('sonuc');
    sonucDiv.innerHTML = '<p>Toplam Puan: ' + puan + '</p>';
}
