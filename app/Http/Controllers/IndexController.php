<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
   public function authenticate(Request $request){
    //    dd($request->only('username', 'password'));

    //    echo "hello";
    $username = $request['username'];
    $password = $request['password'];

    $validate = $request->validate([
        'username' => 'required | max:20',
        'password' => 'min:2'
    ]);
  
    $check = DB::table('agent')->where([ 
        ['agent_id', '=', $username],
        [ 'agent_password', '=', $password] 
    ])->value('agent_id'); 

    $request->session()->put('name', $username); 

    // $password = Hash::make($request['password']);
    
    //  $res = Auth::attempt([ 'agent_id'=>$username,'agent_password'=>$password ]);
    //  $res = auth()->attempt($request->only('username', 'password'))  ;
        //   dd($res);

    //  dd( auth()->user() ); 

    // print_r($validate);
     
    // if ($check) {
    //     print_r("user present");
    //     if (Auth::attempt([ 'name'=>$username,'password'=>$password ])) {
    //         $request->session()->regenerate();
    //         // dd($user);
    //         print_r("insert");
    //         return redirect()->route('home',['data'=>$check]);
    //     } else {
    //     dd( "user not present");
    // }
    // }    

    // return back()->withErrors([
    //     'email' => 'The provided credentials do not match our records.',
    // ]);
    

    
    // dd($check);
    // dd($check[0]->agent_id);

    // dd($check['agent_id']);

    return redirect()->route('home');     

   }

   public function logout(Request $request)
   {
    //    Auth::logout();
   
       $request->session()->invalidate();
   
    //    $request->session()->regenerateToken();
   
       return redirect('/');
   }
}
