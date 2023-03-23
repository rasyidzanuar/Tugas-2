<?php

$nilai_matematika = 60;
$nilai_fisika = 80;
$nilai_biologi = 68;

$ratarata = ($nilai_matematika + $nilai_fisika + $nilai_biologi) / 3;

if($ratarata > 60){
    echo "$ratarata \n";
    echo "Anda Lulus";
}else{
    echo "Anda Gagal";
}

?>
