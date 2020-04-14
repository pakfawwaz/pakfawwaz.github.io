<!DOCTYPE html>
<?php

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
class relativitas_massa{
    function massa_relatif($m_bumi,$m_kec){
        $x2=10**8;
        $konstanta_c=3*$x2;
        $ayam = $m_kec**2;
        $konstanta_c_2 = $konstanta_c**2;
        $goreng = $ayam/$konstanta_c_2;
        $gorengan = 1-$goreng;
        $pisang = sqrt($gorengan);
        $broski = $m_bumi/$pisang;
        echo ($broski);
    }
    function massa_bumi($m_relatif,$m_kec){
        $x2=10**8;
        $konstanta_c=3*$x2;
        $ayam = $m_kec**2;
        $konstanta_c_2 = $konstanta_c**2;
        $goreng = $ayam/$konstanta_c_2;
        $gorengan = 1-$goreng;
        $pisang = sqrt($gorengan);
        $nani = $m_relatif*$pisang;
        echo($broski);
    }

}




if ($_POST['soal']){
    $hore= new Energi_foton();
    if($soal=="1"){
        $frekuensi = $_POST['frekuensi'];
        $lamda = $_POST['lamda'];
        $soal = $_POST['soal'];
        
        echo $hore -> frekwensi ($frekuensi);
    }
    else if ($soal=="2"){
        $frekuensi = $_POST['frekuensi'];
        $lamda = $_POST['lamda'];
        $soal = $_POST['soal'];
        
        echo $hore -> lamda ($lamda);
    }

}
elseif($_POST['soal4']){
    $hore4= new relativitas_massa();
    if($soal4 =="1"){
        $m_relatif = $_POST['m_relatif'];
        $m_bumi = $_POST['m_bumi'];
        $m_kec = $_POST['m_kec'];
        
        echo $hore4 -> massa_relatif ($m_bumi,$m_kec);
    }
    else if ($soal4 =="2"){
        $m_relatif = $_POST['m_relatif'];
        $m_bumi = $_POST['m_bumi'];
        $m_kec = $_POST['m_kec'];
        
        echo $hore4 -> massa_bumi ($m_relatif,$m_kec);
    }

}


