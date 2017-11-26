<?php

namespace App\Http\Controllers\API\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Farms;
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

    public function register(User $user)
    {
      $member = new User;

      $rules = [
          'name' => 'required',
          'email' => 'required|email|unique:users',
          'username' => 'required|unique:users',
          'password' => 'required|confirmed',
          'phone' => 'required',

      ];
      // $table->string('name');
      // $table->string('email')->unique();
      // $table->string('username')->unique();
      // $table->string('phone')->unique();
      // $table->string('rules');
      // $table->string('password');
      // $table->string('api_token');
      $this->validate(request(), $rules);

      $member->name = request()->name;
      $member->email = request()->email;
      $member->username = request()->username;
      $member->phone = request()->phone;
      $member->rules = 'user';
      $member->api_token = bcrypt(request()->email); // pake email

      if(request()['password']){
          $member->password = bcrypt(request()['password']);
      }

      $member->save();

      $farm =  new Farms;

      $farm->user_id = $member->id;
      $farm->name = 'farm';
      $farm->lenght = 0;
      $farm->wide = 0;

      $farm->save();

      return response()->json(['success'=>'Registrasi Sukses!'],200);
    }
}
