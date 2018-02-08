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
    if ($soodusHind < 0) {
        $soodusHind = 0;
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
  array(
      'roll' => 'õpilasele',
      'soodus' => true,
      'opilaskaart' => true,
  ),
  array(
      'roll' => 'õpetajale',
      'soodus' => true,
      'opilaskaart' => false,
  ),
  array(
      'roll' => 'külalisele',
      'soodus' => false,
      'opilaskaart' => false
  )
);

$soogid = array(
    array (
        'nimetus' => 'Šnitsel',
        'kirjeldus' => 'šnitsel sealihast, lisand, kaste, salat, leib',
        'hind' => 2.68
    ),
    array (
        'nimetus' => 'Seapraad',
        'kirjeldus' => 'seapraad, lisand, kaste, salat, leib',
        'hind' => 2.65
    ),
    array (
        'nimetus' => 'Hakklihapallid tomatikastmes',
        'kirjeldus' => 'hakklihapall 2 tk, lisand, kaste, salat, leib',
        'hind' => 2.30
    ),
    array (
        'nimetus' => 'Hakklihapallid tomatikastmes 1/2',
        'kirjeldus' => 'hakklihapall, lisand, kaste, salat, leib',
        'hind' => 1.30
    ),
    array (
        'nimetus' => 'Kartul kastmega',
        'kirjeldus' => 'Kartul , kaste , salat, leib',
        'hind' => 1.28
    ),

);

foreach ($soogid as $sook) {
    echo $sook['nimetus'].': ';
    echo $sook['kirjeldus'].' <br /><br />';
    foreach ($kasutajad as $kasutaja) {
        $soogiHind = soogiHind ( $sook['hind'], $kasutaja['soodus'], $kasutaja['opilaskaart']);
        echo 'Prae hind '.$kasutaja['roll'].' = '.round($soogiHind, 2). ' €<br />';

        echo '---------------<br />';
    }
}


//vaatame $kasutajad masiivi läbi
// for tsükli juhtmis muutjua (tjm) defineerimine; tij kehtivuse kontroll, tjm suurendamine/vähendamine
/**
for($i = 0; $i < count($kasutajad); $i++)
{
    $soogiHind = soogihind( 2.65, $kasutajad[$i][0], $kasutajad[$i][1]);
    echo 'Prae hind = '.round($soogiHind, 2).' €<br />';
}
 */
