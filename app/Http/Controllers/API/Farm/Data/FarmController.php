<?php

namespace App\Http\Controllers\API\Farm\Data;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Farms;
use App\Models\Farmrealization;

class FarmController extends Controller
{
    public function getInfo($id)
    {
       $farm = Farms::with('farmplan', 'farmrealization')->where('users_id',$id)->get();
       return $farm;
    }
    public function updateInfo($id)
    {
        $farms = Farms::where('users_id',$id)->first();
        // return $farms;
        $farm = Farms::find($farms->id);

        request()->validate([
           'name' => 'required',
           'lenght' => 'required',
           'wide' => 'required',
        ]);

        $farm->name = request()->name;
        $farm->lenght = request()->lenght;
        $farm->wide = request()->wide;

        $farm->save();

        if($farm) {
          return response()->json(['data'=> $farm]);
        }
        return response()->json(['gagal'=>'update gagal']);
    }
    public function getReliazationdetail($id)
    {
      $farmrealizationdetail = Farmrealization::with('farmrealizationdetail')->get();
      return $farmrealizationdetail;
    }

    public function getRealizationharvest($id)
    {
      $farmrealizationdetail = Farmrealization::with('farmharvest')->get();
      return $farmrealizationdetail;
    }

}
