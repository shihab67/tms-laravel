<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
    public function verify(Request $request)
    {
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required',
        ],
        ['username.required' => 'Username Required!',
         'password.required' => 'Password Required!',
        ]
    );
        
    $user = DB::table('users')
    ->where('username', $request->username)
    ->where('password', $request->password)
    ->get();	

    if(count($user) > 0 ){
    $request->session()->put('username', $request->input('username'));
    return redirect('/home');
    }else{
    $request->session()->flash('msg', 'invalid username or password');
    return redirect('/');
        }
    }
}
