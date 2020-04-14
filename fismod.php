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
// class relativitas_kecepatan{
//     function


// }
class relativitas_panjang{
    function panjang_relatif($p_bumi,$p_kec){
        $ayam = $p_kec**2;
        $gorengan = 1- $ayam;
        $pisang = sqrt($gorengan);
        $sans = $p_bumi*$pisang;
        echo($sans);


    }
    function panjang_bumi($p_relatif,$p_kec){
        $ayam = $p_kec**2;
        $gorengan = 1- $ayam;
        $pisang = sqrt($gorengan);
        $santuy = $p_relatif/$pisang;
        echo($santuy);

    }

}
class relativitas_waktu{
    function waktu_relatif($w_bumi,$w_kec){
        $ayam = $w_kec**2;
        $gorengan = 1- $ayam;
        $pisang = sqrt($gorengan);
        $broski = $w_bumi/$pisang;
        echo ($broski);
        
    }
    function waktu_bumi ($w_relatif,$w_kec){
        $ayam = $w_kec**2;
        $gorengan = 1- $ayam;
        $pisang = sqrt($gorengan);
        $nani = $w_relatif*$pisang;
        echo($nani);

    }
    

}
class relativitas_massa{
    function massa_relatif($m_bumi,$m_kec){
        $ayam = $m_kec**2;
        $gorengan = 1- $ayam;
        $pisang = sqrt($gorengan);
        $broski = $m_bumi/$pisang;
        echo ($broski);
    }
    function massa_bumi($m_relatif,$m_kec){
        $ayam = $m_kec**2;
        $gorengan = 1- $ayam;
        $pisang = sqrt($gorengan);
        $nani = $m_relatif*$pisang;
        echo($nani);
    }

}
class energi_kinetik{
    function energi_kinetik_($e_m_bumi,$e_kec){
        $e_kec_2=$e_kec**2;
        $ayam=1-$e_kec_2;
        $gorengan=sqrt($ayam);
        $x2=10**8;
        $konstanta_c=3*$x2;
        $konstanta_c_2=$konstanta_c**2;
        $rumuseinstein = $e_m_bumi*$konstanta_c_2;
        $E=$rumuseinstein/$gorengan;
        $EK=$E-$rumuseinstein;
        echo($EK);

    }

}

if (isset($_POST['soal'])){
    $soal=$_POST['soal'];
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
// elseif(isset($_POST['soal1'])){

// }
elseif(isset($_POST['soal2'])){
    $soal2=$_POST['soal2'];
    $hore2= new relativitas_panjang();
    if($soal2 == "1"){
        $p_relatif = $_POST['p_relatif'];
        $p_bumi = $_POST['p_bumi'];
        $p_kec = $_POST['p_kec'];
        echo $hore2 -> panjang_relatif ($p_bumi,$p_kec);

    }
    else if ($soal2 == "2"){
        $p_relatif = $_POST['m_relatif'];
        $p_bumi = $_POST['m_bumi'];
        $p_kec = $_POST['m_kec'];
        echo $hore2 -> panjang_bumi ($p_relatif,$p_kec);

    }

}
elseif(isset($_POST['soal3'])){
    $soal3=$_POST['soal3'];
    $hore3= new relativitas_waktu();
    if($soal3 =="1"){
        $w_relatif = $_POST['w_relatif'];
        $w_bumi = $_POST['w_bumi'];
        $w_kec = $_POST['w_kec'];
        
        echo $hore3 -> waktu_relatif ($w_bumi,$w_kec);
    }
    else if ($soal3 =="2"){
        $w_relatif = $_POST['w_relatif'];
        $w_bumi = $_POST['w_bumi'];
        $w_kec = $_POST['w_kec'];
        
        echo $hore3 -> waktu_bumi ($w_relatif,$w_kec);
    }

}
elseif(isset($_POST['soal4'])){
    $soal4=$_POST['soal4'];
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
elseif(isset($_POST['soal5'])){
    $soal5=$_POST['soal5'];
    $hore5= new energi_kinetik();
    $e_m_bumi = $_POST['e_m_bumi'];
    $e_kec = $_POST['e_kec'];
    echo $hore5 -> energi_kinetik_ ($e_m_bumi,$e_kec);


}


