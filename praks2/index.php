<?php
/**
 * Created by PhpStorm.
 * User: hendrik.ilves
 * Date: 22.02.2018
 * Time: 12:44
 */

echo '<form action="index.php" method="post"
    Sisesta number 1 - 50: <br>
    <input type="number" max="50" min="1" name="number" value="">
    <input type="submit" value="arva">
       </form>';

$suvalinenumber = 42;
$pakutudnumber = $_POST['number'];

if (!empty($pakutudnumber)) {
    switch ($pakutudnumber) {
        case $suvalinenumber:
            echo "Õige! Hurraa!";
            break;
        case ($pakutudnumber > $suvalinenumber):
            echo "Pakkusid liiga palju :(";
            break;
        case ($pakutudnumber < $suvalinenumber);
            echo "Pakkusid liiga vähe :(";
            break;
    }
}