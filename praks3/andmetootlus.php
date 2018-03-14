<?php
/**
 * Created by PhpStorm.
 * User: hendrik.ilves
 * Date: 14.03.2018
 * Time: 9:24
 */

// võtame kasutusele andmebaasitöötlusfunktsioonid
require_once 'ab_fnk.php';
extract($_POST);
// Date formaadiks muutmine
$aeg = $aasta.'-'.$kuu.'-'.$paev;
// tekitame ühenduse andmebaasiga
$yhendus = yhendus();
// saadame andmed serverisse
$sql = 'INSERT INTO phpvorm SET '.
    'eesnimi="'.$eesnimi.'", '.
    'perenimi="'.$perenimi.'", '.
    'aeg="'.$aeg.'"';
// saadame päringu andmebaasi
$tulemus = saadaAndmed($yhendus, $sql, $eesnimi, $perenimi);