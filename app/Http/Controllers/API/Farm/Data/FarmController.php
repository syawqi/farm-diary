<?php

namespace App\Http\Controllers\API\Farm\Data;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Farms;

class FarmController extends Controller
{
    public function getInfo($id)
    {
       $farm = Farms::with('farmplan', 'farmrealization')->where('users_id',$id)->get();
       return $farm;
    }
}
