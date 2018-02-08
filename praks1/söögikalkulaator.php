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

// eelnevalt defineeritud funktsiooni kutsumine

// kui oled õpilane ning sul on sooduskaart
echo 'Hind õpilasele: '.round(soogiHind($soogiHind, true, true), 2).' € <br />';

// kui oled õpetaja ning sul on sooduskaart
echo 'Hind Õpetajale: '.round(soogiHind($soogiHind, true, false),2).' € <br />';

// kui oled külastaja ilma sooduskaardita
echo 'Hind külastajale: '.round(soogiHind($soogiHind, false, false), 2).' € <br />';