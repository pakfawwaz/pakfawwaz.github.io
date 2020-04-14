<!DOCTYPE html>
<?php

$frekuensi = $_POST['frekuensi'];
$lamda = $_POST['lamda'];
$soal = $_POST['soal'];
$x1=10**-34;
$x2=10**8;
$konstanta_plank=6.6*$x1;
$konstanta_c=3*$x2;

class Energi_foton{
    function lamda ($lamda){
        $x1=10**-34;
        $x2=10**8;
        $konstanta_plank=6.6*$x1;
        $konstanta_c=3*$x2;
        $brow=$konstanta_plank*$konstanta_c/$lamda*10**-10;
        echo ($brow);


    }
    function frekwensi ($frekuensi){
        $x1=10**-34;
        $x2=10**8;
        $konstanta_plank=6.6*$x1;
        $konstanta_c=3*$x2;
        $bruh=$konstanta_plank*$frekuensi;
        echo ($bruh);

    }
}

$hore= new Energi_foton();

if($soal=="1"){
    
    echo $hore -> frekwensi ($frekuensi);
}
else if ($soal=="2"){
    
    echo $hore -> lamda ($lamda);
}