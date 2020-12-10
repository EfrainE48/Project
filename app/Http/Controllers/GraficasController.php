<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\entrances;
use Exception;
use Iluminate\support\Facades\DB;
class GraficasController extends Controller
{
    public function graficarEntraces(){
        $entraces = entraces ::select(DB::raw("COUNT(*) as count"))->whereid('created_at', 
        date('Y'))->groupBy(DB::raw("(created_at)"))->pluck('count');
        return view('graficas.graficarEntraces', compact('entraces'));
    }
}
