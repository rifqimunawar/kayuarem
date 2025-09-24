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
  public static function getLinkX()
  {
    $getData = DB::table('sites')->first();
    $data = $getData->link_tw;
    return $data;
  }
  public static function getLinkFb()
  {
    $getData = DB::table('sites')->first();
    $data = $getData->link_fb;
    return $data;
  }
  public static function getLinkYt()
  {
    $getData = DB::table('sites')->first();
    $data = $getData->link_yt;
    return $data;
  }
  public static function getLinkLk()
  {
    $getData = DB::table('sites')->first();
    $data = $getData->link_lk;
    return $data;
  }
  public static function getLinkIg()
  {
    $getData = DB::table('sites')->first();
    $data = $getData->link_ig;
    return $data;
  }
  public static function getLinkTt()
  {
    $getData = DB::table('sites')->first();
    $data = $getData->link_tt;
    return $data;
  }
  public static function getLinkShopee()
  {
    $getData = DB::table('sites')->first();
    $data = $getData->link_shopee;
    return $data;
  }
  public static function getLinkLazada()
  {
    $getData = DB::table('sites')->first();
    $data = $getData->link_lazada;
    return $data;
  }
  public static function getLinkTokped()
  {
    $getData = DB::table('sites')->first();
    $data = $getData->link_tokped;
    return $data;
  }
  public static function getLogo()
  {
    $getData = DB::table('sites')->first();
    $data = asset('img/' . $getData->logo);
    return $data;
  }
}
