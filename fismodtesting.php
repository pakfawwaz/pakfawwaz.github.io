<!DOCTYPE html>
<?php

$umur = $_GET['umur'];
$nama = $_GET['name'];
$email = $_GET['email'];



echo "<br>";
echo "Usia".$umur;
echo "<br>";
echo "Email".$email;
echo "<br>";


class perulangan {
    
    function fungsiumur($umur){
        for ($x = 0; $x <= $umur; $x++) {
            echo "Hehehehe $x <br>";
        }
        if($umur<25){
            echo "Tobat kamu masih polos";
            echo "<br>";
        } else {
            echo "Halo";
            echo "<br>";
        }
    }
    function fungsinama($nama){
        echo "Halo".$nama;
    }
}
$y = new perulangan();

echo $y -> fungsiumur($umur);
echo $y -> fungsinama($nama);