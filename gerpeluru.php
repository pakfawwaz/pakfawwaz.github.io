<?php
class peluru{
    function jarak_maks_1($v0_p,$sudut0_p){

    }
    function tinggi_maks_1($v0_p,$sudut0_p){

    }
    function t_ymaks_1($v0_p,$sudut0_p){

    }
    function t_xmaks_1($v0_p,$sudut0_p){

    }

}
class peluru_horizontal{
    function jarak_maks_2($v0_h,$h0_h){

    }
    function t_xmaks_2($v0_h,$h0_h){

    }
    function sudut_pendaratan($v0_h,$h0_h){

    }
}

if (isset($_POST['soals'])){
    $v0_p = $_POST['v0_p'];
    $sudut0_p = $_POST['sudut0_p'];
    $hai = new peluru();
    if ($_POST['soals'] == 1){
        echo $halo -> jarak_maks_1($v0_p,$sudut0_p);

    }
    elseif ($_POST['soals'] == 2) {
        echo $ha1 -> tinggi_maks_1($v0_p,$sudut0_p);
        # code...
    }
    elseif ($_POST['soals'] == 3) {
        echo $hai -> t_ymaks_1($v0_p,$sudut0_p);
        # code...
    }
    elseif ($_POST['soals'] == 4) {
        echo $hai -> t_xmaks_1($v0_p,$sudut0_p);
        # code...
    }


}
else if (isset($_POST['soals1'])){
    $v0_h =$_POST['v0_h'];
    $h0_h =$_POST['h0_h'];
    $hai1 = new peluru_horizontal();
    if ($_POST['soals1'] == 1){
        echo $hai1 -> jarak_maks_2($v0_h,$h0_h);

    }
    elseif ($_POST['soals1'] == 2) {
        echo $hai1 -> t_xmaks_2($v0_h,$h0_h);
        # code...
    }
    elseif ($_POST['soals1'] == 3) {
        echo $hai1 -> sudut_pendaratan($v0_h,$h0_h);
        # code...
    }

}