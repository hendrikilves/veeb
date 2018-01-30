<?php
/**
 * Created by PhpStorm.
 * User: hendrik.ilves
 * Date: 30.01.2018
 * Time: 10:50
 */
echo 'Aine - Veebiprogrammeerimine'.'<br>';
print 'valikaine'.'<br>';

// muutuja defineerimine
$eesnimi = 'Hendrik';       // eesnimi, string
$perenimi = 'Ilves';        // perenimi, string
$vanus = 19;                // vanus, integer
$komaarv = 0.3;             // komaarv, float
define('NUMBER_PI', 3.14);  // define, constant

// kasutades eelnevalt defineeritud muutujaid seon need tekstiks

echo 'Olen '.$eesnimi.' '.$perenimi.'<br>';
echo 'Olen '.$vanus.'<br>';
echo 'Oskan komaarve nagu näiteks'.$komaarv.'<br>';
echo 'Pi =' .NUMBER_PI. '<br>';