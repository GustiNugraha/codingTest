
<?php

echo "<h2>Soal No 1</h2>";

$angka = 8;
$hasil = 1;
$faktor = [];

for ($i=1; $i <= $angka ; $i++) { 
    $hasil = $hasil*$i;
    array_push($faktor, $i);
}
echo $hasil;
// print_r( $faktor);

//------------------------------------------------------------

//Soal 2
echo "<h2>Soal No 2</h2>";
$kata = "abcde";

$dibalik = strrev($kata);
echo $dibalik;
echo "<br>";
echo "<br>";


// ------------------------------------------------------------

//Soal 4
echo "<h2>Soal No 4</h2>";

// swap 2 number tanpa tamabahan variable

$a = 3;
$b = 7;

echo "a = ", $a,"</br>";
echo "b = ", $b, "</br>";

//swap

$a = $a - $b; //3 - 7 = -4
$b = $b + $a; //7 + (-4) = 3  
$a = $b - $a; // 3 - (-4) = 7

echo "a = ", $a,"</br>";
echo "b = ", $b,"</br>";

//--------------------------------------------------------------

//soal no 5

echo "<h2>Soal No 5 </h2>";

$nilai = 127;
echo terbilang($nilai); 

function terbilang($angka)
{

    $arr_angka = array("","satu","dua","tiga","empat","lima","enam","tujuh","delapan","sembilan","sepuluh","sebelas");
    
    //jika angka kurang dari 12
    if ($angka < 12) {
        return $arr_angka[$angka];
    }
    // jika angka kurang dari 20
    elseif ($angka < 20){
        return terbilang($angka-10)." belas";
    }
    elseif ($angka < 100){
        return terbilang($angka/10)." puluh ". terbilang($angka%10);
    }
    elseif ($angka < 200){
        return "seratus ".terbilang($angka-100);
    }
}
    
?>