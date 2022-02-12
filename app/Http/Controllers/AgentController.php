<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Agent;

class AgentController extends Controller
{
    public function show(){
        // $agents = DB::table('agent')->select('*')->get();
        // // dd($agents);

        $agents = Agent::all(); 
        // dd($agents);
        return view('components.agent', ['agents'=>$agents]);


    }
}
