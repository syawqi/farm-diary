<?php

namespace App\Http\Controllers\API\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
class LoginController extends Controller
{
    public function login(User $user){
      if(!Auth::attempt(['username'=>request()->username,'password'=>request()->password])){
        return response()->json(['error'=>'Your credential is wrong'],401);
      }
      $user = $user::find(Auth::user()->id);
      return $user;
    }
}
