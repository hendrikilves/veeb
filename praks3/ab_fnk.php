<?php
/**
 * Created by PhpStorm.
 * User: hendrik.ilves
 * Date: 14.03.2018
 * Time: 9:28
 */

// ühendus ab serveriga
function yhendus(){
    $ab_yhendus = mysqli_connect(localhost, ilveshendrikiktk, "f.Xg2L(J7Rni", ilveshen_phpvorm);
    if($ab_yhendus == false){
        echo 'Probleem andmebaasi ühendamisega<br />';
        echo mysqli_connect_error().'<br />';
        echo mysqli_connect_errno().'<br />';
        exit;
    } else {
        echo 'Ühendus on loodud<br />';
    }
    return $ab_yhendus;
}
// päringute edastamine andmebaasi
function saadaAndmed($ab_yhendus, $sql, $eesnimi, $perenimi){

    $val = mysqli_query($ab_yhendus,"select * from phpvorm WHERE eesnimi='$eesnimi' AND perenimi='$perenimi'");
    if (!$val) {
        die('Error: ' . mysqli_error($ab_yhendus));
    }
    if(mysqli_num_rows($val) > 0) {
        echo "See isik on juba andmed sisestanud!<br><br>";
    } else
    {
        $tulemus = mysqli_query($ab_yhendus, $sql);
        if($tulemus ==  false){
            echo 'Probleem päringuga '.$sql.' <br />';
            echo mysqli_error($ab_yhendus);
            echo mysqli_errno($ab_yhendus);
            return false;
        }
        return $tulemus;
    }
}