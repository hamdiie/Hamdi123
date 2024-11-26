<?php
//membuat function sederhana

/*
fanction terbagi menjadi dua
-function yang tidak mengembalikan nilai 
-function yang mengembalikan nilai
*/


//function yang tidak memgembalikan nilai 

function menampilkan(){
echo "HELLO PHP";
$a = 10;
$hasil = $a = $b;
echo $hasil;
echo "&";
// function yang mengembalikan nilai
function perkalian( $a, $b ){
    $hasil = $a * $b;
    echo "\n";
    echo $hasil;
    return;

    //memanggil function
    //menampilkan();
    //perkalian(10,100);
}
}
?>
