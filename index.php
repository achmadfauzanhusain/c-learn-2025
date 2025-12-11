<?php

$nama = "fauzan husain";
$umur = 20;
$uang = 1000000;
$hobi = ["coding", "nonton film", "catur"];
$sudahmakanbelum = true;

echo "namaku : " . $nama . "<br>";
echo "umurku : " . $umur . "tahun" . "<br>";
echo "uangku : Rp" . $uang . "<br>";

if($sudahmakanbelum === true) {
    echo "saya sudah makan" . "<br>";
} else {
    echo "saya belum makan" . "<br>";
}

for ($i = 0; $i < count($hobi); $i++) {
    echo "Hobi ke-" . $i + 1 . "\n" . $hobi[$i] . "<br>";
}