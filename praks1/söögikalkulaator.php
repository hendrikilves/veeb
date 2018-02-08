<?php
/**
 * Created by PhpStorm.
 * User: hendrik.ilves
 * Date: 08.02.2018
 * Time: 11:01
 */

// Seadistame vajalikud muutujad
$soogiHind = 2.65; // söögi hind eurodes

// funktisoon soodustuse arvutamiseks
/**
 * @param $taisHind
 * @param $soodusKaart
 * @param $kasOledOpilane
 */
function soogiHind ($taisHind, $soodusKaart, $kasOledOpilane) {
    // funktsiooni sisu
    $toetus = 1.80; // õpilase toetus eurodes
    $soodustusProtsent = 15; // soodustusprotsent
    $soodusHind = $taisHind;

    if ($soodusKaart) {
        $soodusHind = $taisHind - ($taisHind * ($soodustusProtsent / 100));
    }
    if ($kasOledOpilane) {
        $soodusHind -= $toetus;
    }
    return $soodusHind;
} // funktsiooni lõpp

// testimiseks paneme erinevad väärtused paika
// kasutame selleks array kujul (sooduskaart, kasOledOpilane)

// kasutajad on tabel (array) , kus
// esimesel real on õpilase andmed
// teisel real on õpetaja andmed
// kolmandal real on külaliste andmed
$kasutajad = array (
  array(true, true),
  array(true, false),
  array(false, false)
);

//vaatame $kasutajad masiivi läbi
// for tsükli juhtmis muutjua (tjm) defineerimine; tij kehtivuse kontroll, tjm suurendamine/vähendamine
for($i = 0; $i < count($kasutajad); $i++)
{
    $soogiHind = soogihind( 2.65, $kasutajad[$i][0], $kasutajad[$i][1]);
    echo 'Prae hind = '.round($soogiHind, 2).' €<br />';
}
// eelnevalt defineeritud funktsiooni kutsumine

/** kui oled õpilane ning sul on sooduskaart
echo 'Hind õpilasele: '.round(soogiHind($soogiHind, $opilane[0], $opilane[1]), 2).' € <br />';

// kui oled õpetaja ning sul on sooduskaart
echo 'Hind õpetajale: '.round(soogiHind($soogiHind, $opetaja[0], $opetaja[1]),2).' € <br />';

// kui oled külastaja ilma sooduskaardita
echo 'Hind külastajale: '.round(soogiHind($soogiHind, $kulaline[0], $kulaline[1]), 2).' € <br />';
 */