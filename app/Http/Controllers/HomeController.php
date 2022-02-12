<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{ 
    public function index()
    {
        if (session('name')) {
            // dd("ok");
            $agent_total = DB::table('agent')->count();
            $client_total = DB::table('client')->count();
            $payment_total = DB::table('payment')->count();
            // dd($agent_total,); 

            return view('home', [ 'agent_to' => $agent_total, 'client_to' => $client_total, 'payment_to' => $payment_total]);
        } else {
            // dd("lod in first");
            return redirect()->route('login');
        }
    }
}
