<?php
/**
 * Created by PhpStorm.
 * User: hendrik.ilves
 * Date: 22.02.2018
 * Time: 12:44
 */

session_start();


if(!isset($_SESSION['suvalinenumber']) and !isset($_SESSION['katsetearv'])){
    $_SESSION['suvalinenumber'] = rand(1, 50);
    $_SESSION['katsetearv'] = 0;
} else {
    $suvalinenumber = $_SESSION['suvalinenumber'];
    $katsetearv = ++$_SESSION['katsetearv'];
}

$pakutudnumber = $_POST['number'];

echo '<pre>' .print_r($_SESSION).'</pre>';

echo '<form action="index.php" method="post"
    Sisesta number 1 - 50: <br>
    <input type="number" max="50" min="1" name="number" value="">
    <input type="submit" value="arva">
       </form>';



if (!empty($pakutudnumber)) {
    switch ($pakutudnumber) {
        case $suvalinenumber:
            echo "Õige! Hurraa! <br>" ;
            echo "Sul läks arvamiseks ".$katsetearv." katset";
            unset($_SESSION['katsetearv']);
            break;
        case ($pakutudnumber >= $suvalinenumber - 5 and $pakutudnumber < $suvalinenumber or $pakutudnumber <= $suvalinenumber + 5 and $pakutudnumber > $suvalinenumber);
            echo "Aii napikas";
            break;
        case ($pakutudnumber > $suvalinenumber):
            echo "Pakkusid liiga palju :(";
            break;
        case ($pakutudnumber < $suvalinenumber);
            echo "Pakkusid liiga vähe :(";
            break;
    }
}