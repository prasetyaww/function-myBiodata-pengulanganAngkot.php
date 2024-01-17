<?php

$nama_lengkap = "Prasetya Ningrum";
$umur = 16;
$kelas = "X RPL 1";
$tempatTanggalLahir = "Sukoharjo, 19 Juni 2007";
$nomorWa = "0859 4368 5199";
$alamat = "Jl.Abdul Muis No. 44, Jakarta Pusat";

function myBiodata(){
    global $nama_lengkap, $umur, $kelas, $tempatTanggalLahir, $nomorWa, $alamat;
    echo "<h1>=== Program Biodata Sederhana Function ===</h1>";
    echo "Nama Lengkap : $nama_lengkap <br />";
    echo "Umur : $umur <br />";
    echo "Kelas : $kelas <br />";
    echo "Tempat/Tanggal Lahir : $tempatTanggalLahir <br />";
    echo "Nomor WhatsApp : $nomorWa <br />";
    echo "Alamat : $alamat <br />";
    echo "==================================================================================";
}

echo myBiodata();

?>