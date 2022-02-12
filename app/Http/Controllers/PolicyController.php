<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PolicyController extends Controller
{
    public function show(){ 
        $policys = DB::table('policy')->select('*')->get();
        // dd($agents);
        return view('components.policy', ['policys'=>$policys]);
    }
}
