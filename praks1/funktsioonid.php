<?php
/**
 * Created by PhpStorm.
 * User: hendrik.ilves
 * Date: 8.02.2018
 * Time: 12:45
 */
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
    if ($soodusHind < 0) {
        $soodusHind = 0;
    }
    return $soodusHind;
} // funktsiooni lõpp

//vormi väljastamise funktsioon
// vormi hoiame vorm.html failis
//vormi sisu loeme antud failist ja väljastame

function loeVormFailist($failinimi) {
    // siia salvestame sisu
    $sisu = '';
    // kontrollime vajaliku faili olemasolu
    if(file_exists($failinimi) and is_file($failinimi) and is_readable($failinimi)) {
        // fail on olemas ja sealt saab lugeda
        $fp = fopen($failinimi,'r');
        // loeme failist täissisu
        $sisu = fread($fp, filesize($failinimi));
        fclose($fp); //sulgeme ühenduse failiga

    } else {
        echo 'probleem '.$failinimi. 'failiga<br />';
        exit;
    }
    echo $sisu;
}