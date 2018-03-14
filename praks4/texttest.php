<?php
/**
 * Created by PhpStorm.
 * User: hendrik.ilves
 * Date: 14.03.2018
 * Time: 10:56
 */

require_once 'text.php';
$minuTekst = new text('Must-valge tekst');
echo '<pre>';
print_r($minuTekst);
echo '<pre>';
$minuTekst->setStr('muu väärtus') ;
echo '<pre>';
print_r($minuTekst);
echo '<pre>';
$minuTekst->showText();
require_once 'colorText.php';
$punaneTekst = new colorText('Punane tekst', '#FF0000');
echo '<pre>';
print_r($punaneTekst);
echo '<pre>';
$punaneTekst->showText();