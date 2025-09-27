<?php
namespace App\Helpers;

use Carbon\Carbon;
use Stichoza\GoogleTranslate\GoogleTranslate;

class Fungsi
{

  public static function inputTranslate(?string $text, string $from = 'id', string $to = 'en') : ?array
  {
    if (empty($text)) {
      return null;
    }
    $plain = trim(strip_tags($text));
    return [
      $from => $text,
      $to => GoogleTranslate::trans($plain, $to, $from)
    ];
  }


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
    $lang = app()->getLocale(); // ambil bahasa aktif (id/en)
    $carbon = Carbon::parse($tgl)->locale($lang);

    if ($lang === 'id') {
      // format Indonesia
      $hari = $carbon->isoFormat('dddd');
      $tanggal = $carbon->isoFormat('D');
      $bulan = $carbon->isoFormat('MMMM');
      $tahun = $carbon->isoFormat('YYYY');

      return "{$hari}, {$tanggal} {$bulan} {$tahun}";
    } else {
      // format Inggris
      // contoh: Monday, September 27, 2025
      return $carbon->isoFormat('dddd, MMMM D, YYYY');
    }
  }

  public static function format_tgl_jam($tgl)
  {
    $lang = app()->getLocale();
    $carbon = Carbon::parse($tgl)->locale($lang);

    if ($lang === 'id') {
      $hari = $carbon->isoFormat('dddd');
      $tanggal = $carbon->isoFormat('D');
      $bulan = $carbon->isoFormat('MMMM');
      $tahun = $carbon->isoFormat('YYYY');
      $waktu = $carbon->isoFormat('HH:mm');

      return "{$hari}, {$tanggal} {$bulan} {$tahun} {$waktu}";
    } else {
      // contoh: Monday, September 27, 2025 14:30
      return $carbon->isoFormat('dddd, MMMM D, YYYY HH:mm');
    }
  }

}
