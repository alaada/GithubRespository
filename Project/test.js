/**
 * Created by user on 22.04.2016.
 */
document.querySelector('#topLoginBar').addEventListener('click',
    /**
     * Funktsioon teeb vormi nähtavaks ning peidab "peida" nupu
     * @event
     */
    function () {
        document.getElementById('loginButton').style.display = 'block';
        document.getElementById('').style.display = 'none';
    });

/*
 Seame nupule "Peida lisamise vorm" sündmuse "click" halduri, mis teeb "kuva-nupp"
 paragrahvi nähtavaks, aga peidab "lisa-vorm" form elemendi
 */
document.querySelector('#peida-nupp button').addEventListener('click',
    /**
     * Funktsioon peidab vormi ning teeb nähtavaks "peida" nupu
     * @event
     */
    function () {
        document.getElementById('loginButton').style.display = 'none';
        document.getElementById('').style.display = 'block';
    });

/*
 Lisame vormielemendile "lisa-vorm" sündmuse "submit" halduri, mis ilmeb siis kui kasutaja
 kas klikib vormis asuval submit nupul või vajutab tekstikastis enter klahvi.
 */
document.getElementById('lisa-vorm').addEventListener('submit',
    /**
     * Käivitatakse vormi postitamisel. Kontrollib vormis olevaid väärtusi ja lisab
     * laotabelisse uue rea valitud väärtusega
     * @event
     * @param  {Event} event Sündmuse info
     */
    function (event) {
        // loeme tekstikastidest kasutaja sisestatud andmed
        var nimetus = document.getElementById('nimetus').value;
        var kogus = Number(document.getElementById('kogus').value);

        // kontrollime väärtuseid
        if (!nimetus || kogus <= 0) {
            alert('Vigased väärtused!');
            // Katkestame tavalise submit tegevuse, vastasel korral navigeeriks brauser mujale
            event.preventDefault();
            return;
        }
    });