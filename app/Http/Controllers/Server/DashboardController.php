<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\LogPengunjung;
use App\Models\Product;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DashboardController extends Controller
{
  public function index()
  {
    App::setLocale('id');
    Carbon::setLocale('id');
    $today = Carbon::today();
    $start = $today->copy()->subDays(6);
    $data = LogPengunjung::whereBetween('visited_at', [$start, $today->endOfDay()])
      ->get()
      ->groupBy(function ($item) {
        return Carbon::parse($item->visited_at)->format('Y-m-d');
      });
    $result = [];
    for ($date = $start->copy(); $date <= $today; $date->addDay()) {
      $tanggal = $date->format('Y-m-d');
      $hari = ucfirst($date->translatedFormat('l'));
      $result[] = [
        'tanggal' => $tanggal,
        'hari' => $hari,
        'jumlah' => isset($data[$tanggal]) ? $data[$tanggal]->count() : 0,
      ];
    }


    $dataProduct = Product::all()->count();
    $dataProject = Project::all()->count();
    $dataMessage = Contact::all()->count();
    $dataMessageUnread = Contact::whereNull('is_read')->count();


    return view('server.dashboard.index', [
      'datePengunjung' => $result,
      'dataProduct' => $dataProduct,
      'dataProject' => $dataProject,
      'dataMessage' => $dataMessage,
      'dataMessageUnread' => $dataMessageUnread,
    ]);
  }
}
