<?php

namespace App\Http\Controllers\API\Balance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pendapatan;
use App\Models\Pengeluaran;
use App\Models\Farms;

class BalanceController extends Controller
{
    public function getBalance()
    {
        $farm = Farms::with('pendapatan','pengeluaran')->where('users_id', request()->id)->first();
        $totalPendapatan = Pendapatan::where('farms_id', $farm->id)->sum('pendapatan');
        $totalPengeluaran = Pengeluaran::where('farms_id', $farm->id)->sum('pengeluaran');

        return response()->json(['farm'=> $farm, 'pengeluaran' => $totalPengeluaran,'pendapatan' => $totalPendapatan]);
    }
}
