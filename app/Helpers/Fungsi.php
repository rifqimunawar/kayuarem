<?php
namespace App\Helpers;

use Carbon\Carbon;

class Fungsi
{
  public static function getImg($image)
  {
    $path = (asset('img/' . $image));
    return $path;
  }
  public static function rupiah($angka)
  {
    $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
    return $hasil_rupiah;
  }

  // Fungsi untuk mendapatkan nama hari dalam seminggu
  public static function format_tgl($tgl)
  {
    $hari = Carbon::parse($tgl)->locale('id')->isoFormat('dddd');
    $tanggal = Carbon::parse($tgl)->locale('id')->isoFormat('D');
    $bulan = Carbon::parse($tgl)->locale('id')->isoFormat('MMMM');
    $tahun = Carbon::parse($tgl)->locale('id')->isoFormat('YYYY');

    return $hari . ', ' . $tanggal . ' ' . $bulan . ' ' . $tahun;
  }
  public static function format_tgl_jam($tgl)
  {
    $carbon = Carbon::parse($tgl)->locale('id');

    $hari = $carbon->isoFormat('dddd');
    $tanggal = $carbon->isoFormat('D');
    $bulan = $carbon->isoFormat('MMMM');
    $tahun = $carbon->isoFormat('YYYY');
    $waktu = $carbon->isoFormat('HH:mm');

    return $hari . ', ' . $tanggal . ' ' . $bulan . ' ' . $tahun . ' ' . $waktu;
  }

}
