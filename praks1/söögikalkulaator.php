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

$opilane = array(true, true); // olemas soodus - $opilane[0] ja oled õpilane - $opilane[1]
$opetaja = array(true, false); // olemas sooduskaart kuid ei ole õpilane
$kulaline = array(false, false); // ei ole sooduskaarti ega pole ka õpilane


// eelnevalt defineeritud funktsiooni kutsumine

// kui oled õpilane ning sul on sooduskaart
echo 'Hind õpilasele: '.round(soogiHind($soogiHind, $opilane[0], $opilane[1]), 2).' € <br />';

// kui oled õpetaja ning sul on sooduskaart
echo 'Hind õpetajale: '.round(soogiHind($soogiHind, $opetaja[0], $opetaja[1]),2).' € <br />';

// kui oled külastaja ilma sooduskaardita
echo 'Hind külastajale: '.round(soogiHind($soogiHind, $kulaline[0], $kulaline[1]), 2).' € <br />';