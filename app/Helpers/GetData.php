<?php
namespace App\Helpers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class GetData
{
  public static function getGmap()
  {
    $getData = DB::table('sites')->first();
    $data = $getData->link_gmap;
    return $data;
  }
  public static function getTelp()
  {
    $getData = DB::table('sites')->first();
    $data = $getData->mobile;
    return $data;
  }
  public static function getEmail()
  {
    $getData = DB::table('sites')->first();
    $data = $getData->email;
    return $data;
  }
  public static function getAlamat()
  {
    $getData = DB::table('sites')->first();
    $data = $getData->alamat;
    return $data;
  }
  public static function getNamaWeb()
  {
    $getData = DB::table('sites')->first();
    $data = $getData->site_name;
    return $data;
  }
  public static function getSosmed()
  {
    $getData = DB::table('sites')->first();
    $data = $getData->link_ig;
    return $data;
  }
  public static function getLogo()
  {
    $getData = DB::table('sites')->first();
    $data = asset('img/' . $getData->logo);
    return $data;
  }
}
