<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Farms;
class UserController extends Controller
{
    public function updateInfo()
    {
        $user  = User::find(request()->id);
        request()->validate([
           'name' => 'required',
           'email' => 'required|email',
           'phone' => 'required',
           'username' => 'required',
        ]);
        $user->name = request()->name;
        $user->email = request()->email;
        $user->username = request()->username;
        $user->phone = request()->phone;
        // $user->api_token = bcrypt(request()->email);

        if (request()->password) {
          request()->validate([
             'password' => 'confirmed',
          ]);
          $user->password = bcrypt(request()->password);
        }
        $user->save();

        $farm = Farms::where('users_id', $user->id)->first();
        $farm->name = request()->farName;
        $farm->lenght = request()->lenght;
        $farm->wide = request()->wide;

        $farm->save();

        return response()->json(['data',$user]);
    }
    public function showProfile()
    {
       $user = User::find(request()->id);
       $farm = Farms::where('users_id', $user->id)->first();
       return response()->json(['user'=>$user,'farm'=>$farm]);
    }
}
