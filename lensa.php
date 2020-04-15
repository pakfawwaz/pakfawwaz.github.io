<?php
class lensa_cekung{
    function fokus(){

    }
    function jarak_benda_k(){

    }
    function jarak_bayangan_k(){

    }
    function jari_lensa_k(){

    }
    function perbesaran(){

    }

}
class lensa_cembung{
    function fokus_b(){

    }
    function jarak_benda_b(){

    }
    function jarak_bayangan_b(){

    }
    function jari_lensa_b(){

    }
    function perbesaran_b(){
        
    }

}

if (isset($_POST['soale'])){
    $fokus_k = $_POST['fokus_k'];
    $jarak_bayangan_k = $_POST['jarak_bayangan_k'];
    $jarak_benda_k = $_POST['jarak_benda_k'];
    $jari_lensa_k = $_POST['jari_lensa_k'];
    $halo = new lensa_cekung();
    if ($_POST['soale'] == 1){
        echo $halo -> fokus();

    }
    elseif ($_POST['soale'] == 2) {
        echo $halo -> jarak_benda_k();
        # code...
    }
    elseif ($_POST['soale'] == 3) {
        echo $halo -> jarak_bayangan_k();
        # code...
    }
    elseif ($_POST['soale'] == 4) {
        echo $halo -> jari_lensa_k();
        # code...
    }
    elseif ($_POST['soale'] == 5) {
        echo $halo -> perbesaran();
        # code...
    }


}
else if (isset($_POST['soale1'])){
    $fokus_b =$_POST['fokus_b'];
    $jarak_bayangan_b =$_POST['jarak_bayangan_b'];
    $jarak_benda_b = $_POST['jarak_benda_b'];
    $jari_lensa_b = $_POST['jari_lensa_b'];
    $halo1 = new lensa_cekung();
    if ($_POST['soale1'] == 1){
        echo $halo -> fokus_b();

    }
    elseif ($_POST['soale1'] == 2) {
        echo $halo -> jarak_benda_b();
        # code...
    }
    elseif ($_POST['soale1'] == 3) {
        echo $halo -> jarak_bayangan_b();
        # code...
    }
    elseif ($_POST['soale1'] == 4) {
        echo $halo -> jari_lensa_b();
        # code...
    }
    elseif ($_POST['soale1'] == 5) {
        echo $halo -> perbesaran_b();
        # code...
    }

}