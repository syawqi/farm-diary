<?php

namespace App\Http\Controllers\API\Farm\Monev;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Farms;
use App\Models\Farmrealization;
use App\Models\farmrealizationdetail;
use App\Models\Farmplan;

class RealisasiController extends Controller
{
    public function getRealisasi()
    {
      $farm = Farms::where('users_id', request()->id)->first();

      $realisasi = Farmrealization::where('farms_id', $farm->id)->get();

      return $realisasi;
    }

    public function getRealisasidetail($id)
    {
      $realisasiDetail = farmrealizationdetail::where('farmrealization_id', $id)->get();

      return $realisasiDetail;
    }

    public function getRencana()
    {
      $farm = Farms::where('users_id', request()->id)->first();

      $realisasi = Farmplan::where('farms_id', $farm->id)->get();

      return $realisasi;
    }

}
