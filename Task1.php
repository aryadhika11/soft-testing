<?php
//--------------------------------------------------------------+++++++++++++++++++++++++++++++++++++++++++++++
//SOURCE CODE #1
//--------------
//Tujuan source code ini menggunakan 2 input parameter yaitu gaji dan waktu kerja pegawai
//--------------

//menghitung gaji normal
function hitungGajiNormal($gaji)
{
    $gajiNormal = $gaji * 40;
    return $gajiNormal;
}

//menghitung gaji lembur
function hitungGajiLembur($waktu, $gaji)
{
    $waktuLembur = $waktu - 40;
    $gajiLembur = $waktuLembur * 1.5 * $gaji;
    return $gajiLembur;
}

//menghitung gaji total keseluruhan
function hitungGajiTotal($gaji, $waktu) {
    $pengeluaran = 600000;

    $totalPemasukan = hitungGajiNormal($gaji) + hitungGajiLembur($waktu, $gaji);

    if($totalPemasukan > $pengeluaran) {
        $sisa = $totalPemasukan - $pengeluaran;
        echo "$totalPemasukan, bisa menabung. sisa pemasukan : $sisa";
    }else if ($totalPemasukan < $pengeluaran) {
        $sisa = $totalPemasukan - $pengeluaran;
        echo "$totalPemasukan, cari tambahan, sisa pemasukan : $sisa";
    }else if ($totalPemasukan === $pengeluaran) {
        $sisa = $totalPemasukan - $pengeluaran;
        echo "$totalPemasukan, tidak bisa menabung, sisa pemasukan : $sisa";
    }else {
        echo "Masukkan Input Yang Valid";
    }
}
//call a function
echo hitungGajiTotal(15000, 52);



//--------------------------------------------------------------+++++++++++++++++++++++++++++++++++++++++++++++
//SOURCE CODE #2
//--------------
//Tujuan source code ini menggunakan 1 input parameter yaitu waktu kerja pegawai dengan nilai gaji normal sudah ditentukan oleh perusahaan
//--------------

//menghitung gaji normal berdasarkan gaji dan waktu yang tetap
function hitungGajiNormal2()
{
    $gajiNormal = 15000 * 40;
    return $gajiNormal;
}
//menghitung gaji lembur dan total gaji
function hitungGaji2($waktu)
{
    $pengeluaran = 600000;

    if ($waktu >= 40) {
        $waktuLembur = $waktu - 40;
        $gajiLembur = $waktuLembur * 1.5 * 15000;
        $pemasukan = hitungGajiNormal2() + $gajiLembur;
        if ($pemasukan > $pengeluaran) {
            $sisa = $pemasukan - $pengeluaran;
            echo "$pemasukan, bisa menabung. sisa pemasukan : $sisa";
        } else if ($pemasukan == $pengeluaran) {
            echo "$pemasukan, tidak bisa menabung";
        }
    } else {
        $gajiMalas = 15000 * $waktu;
        if ($gajiMalas < $pengeluaran) {
            echo "$gajiMalas, cari tambahan";
        }
    }
}
//call a function
// echo hitungGaji2(52);


