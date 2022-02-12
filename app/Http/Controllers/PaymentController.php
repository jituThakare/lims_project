<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function show(){
        $payments = DB::table('payment')->get('*');        
        // dd($payments);

        return view('components.payment', ['payments'=>$payments]);
    }

    public function add(){

        return view('addPayment');

    }
}
