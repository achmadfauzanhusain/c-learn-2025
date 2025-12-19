<?php

$mahasiswa = [
    "nama" => "Fauzan Husain",
    "prodi" => "Rekayasa Perangkat Lunak",
    "fakultas" => "Informatika",
    "sisa_uang" => 2000000,
    "hutang_perpustakaan" => true,
    "ipk" => 3.75
];

// hitung biaya sks
$jumlah_sks = 20;
$harga_per_sks = 150000;

$total_tagihan = $jumlah_sks * $harga_per_sks;
$sisa_uang_akhir = $mahasiswa["sisa_uang"] - $total_tagihan;

// cek kelayakan keuangan
function cekKeuangan($sisa_duit) {
    if($sisa_duit >= 0) {
        return "Lunas! bisa ambil KRS!";
    } else {
        return "Ditolak! Uang Kurang!";
    }
}

cekKeuangan($sisa_uang_akhir);

// validasi akademik
if($mahasiswa["ipk"] >= 3.0 && $mahasiswa["hutang_perpustakaan"] === false) {
    echo "Boleh ambil KRS!";
} else {
    echo "Tidak boleh ambil KRS!";
}
