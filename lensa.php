<?php
class lensa_cekung{
    function fokus($jarak_bayangan_k,$jarak_benda_k){
        $kuda = $jarak_bayangan_k+$jarak_benda_k;
        $keledai = $jarak_bayangan_k*$jarak_benda_k;
        $hasile = $kuda/$keledai;
        echo($hasile);

    }
    function jarak_benda_k($fokus_k,$jarak_bayangan_k){
        $keledai = $jarak_bayangan_k*$fokus_k;
        $ayam = $jarak_bayangan_k-$fokus_k;
        $hasils = $keledai/$ayam;
        echo($hasils);
    }
    function jarak_bayangan_k($fokus_k,$jarak_benda_k){
        $keledai1 = $jarak_benda_k*$fokus_k;
        $ayam1 = $jarak_benda_k-$fokus_k;
        $hasils1 = $keledai1/$ayam1;
        echo($hasils1);

    }
    function jari_lensa_k($jarak_bayangan_k,$jarak_benda_k){
        $keledai2 = $jarak_benda_k*$jarak_bayangan_k;
        $ayam2 = $jarak_benda_k+$jarak_bayangan_k;
        $hasils2 = 2*$keledai2/$ayam2;
        echo($hasils2);
    }
    function perbesaran($jarak_bayangan_k,$jarak_benda_k){
        $perbesaran_k = $jarak_bayangan_k/$jarak_benda_k;
        echo($perbesaran_k);

    }

}
class lensa_cembung{
    function fokus_b($jarak_bayangan_b,$jarak_benda_b){
        $kuda = $jarak_bayangan_b+$jarak_benda_b;
        $keledai = $jarak_bayangan_b*$jarak_benda_b;
        $hasile = $kuda/$keledai;
        echo($hasile);

    }
    function jarak_benda_b($fokus_b,$jarak_bayangan_b){
        $keledai = $jarak_bayangan_b*$fokus_b;
        $ayam = $jarak_bayangan_b-$fokus_b;
        $hasils = $keledai/$ayam;
        echo($hasils);

    }
    function jarak_bayangan_b($fokus_b,$jarak_benda_b){
        $keledai1 = $jarak_benda_b*$fokus_b;
        $ayam1 = $jarak_benda_b-$fokus_b;
        $hasils1 = $keledai1/$ayam1;
        echo($hasils1);

    }
    function jari_lensa_b($jarak_bayangan_b,$jarak_benda_b){
        $keledai2 = $jarak_benda_b*$jarak_bayangan_b;
        $ayam2 = $jarak_benda_b+$jarak_bayangan_b;
        $hasils2 = 2*$keledai2/$ayam2;
        echo($hasils2);

    }
    function perbesaran_b($jarak_bayangan_b,$jarak_benda_b){
        $perbesaran_k = $jarak_bayangan_k/$jarak_benda_k;
        echo($perbesaran_k);
        
    }

}

if (isset($_POST['soale'])){
    $fokus_k = $_POST['fokus_k'];
    $jarak_bayangan_k = $_POST['jarak_bayangan_k'];
    $jarak_benda_k = $_POST['jarak_benda_k'];
    $jari_lensa_k = $_POST['jari_lensa_k'];
    $halo = new lensa_cekung();
    if ($_POST['soale'] == 1){
        echo $halo -> fokus($jarak_bayangan_k,$jarak_benda_k);

    }
    elseif ($_POST['soale'] == 2) {
        echo $halo -> jarak_benda_k($fokus_k,$jarak_bayangan_k);
        # code...
    }
    elseif ($_POST['soale'] == 3) {
        echo $halo -> jarak_bayangan_k($fokus_k,$jarak_benda_k);
        # code...
    }
    elseif ($_POST['soale'] == 4) {
        echo $halo -> jari_lensa_k($jarak_bayangan_k,$jarak_benda_k);
        # code...
    }
    elseif ($_POST['soale'] == 5) {
        echo $halo -> perbesaran($jarak_bayangan_k,$jarak_benda_k);
        # code...
    }


}
else if (isset($_POST['soale1'])){
    $fokus_b =$_POST['fokus_b'];
    $jarak_bayangan_b =$_POST['jarak_bayangan_b'];
    $jarak_benda_b = $_POST['jarak_benda_b'];
    $jari_lensa_b = $_POST['jari_lensa_b'];
    $halo1 = new lensa_cembung();
    if ($_POST['soale1'] == 1){
        echo $halo1 -> fokus_b($jarak_bayangan_b,$jarak_benda_b);

    }
    elseif ($_POST['soale1'] == 2) {
        echo $halo1 -> jarak_benda_b($fokus_b,$jarak_bayangan_b);
        # code...
    }
    elseif ($_POST['soale1'] == 3) {
        echo $halo1 -> jarak_bayangan_b($fokus_b,$jarak_benda_b);
        # code...
    }
    elseif ($_POST['soale1'] == 4) {
        echo $halo1 -> jari_lensa_b($jarak_bayangan_b,$jarak_benda_b);
        # code...
    }
    elseif ($_POST['soale1'] == 5) {
        echo $halo1 -> perbesaran_b($jarak_bayangan_b,$jarak_benda_b);
        # code...
    }

}