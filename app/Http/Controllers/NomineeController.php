<?php

namespace App\Http\Controllers;

use App\Models\Nominee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NomineeController extends Controller
{
    public function show(){ 
        // $nominee  = DB::table('nominee')->select('*')->get();

        $nominee = Nominee::all('*');
        // dd($nominee);
        return view('components.nominee', ['nominees'=>$nominee  ]);
    }

    public function showForm(){
        $n_id = time(). '-'. mt_rand();
        return view('components.addNominee',['n_id'=>$n_id]);
    }

    public function insert(Request $request){
        // $result = $request->input();
        // dd($result);
       $query = DB::table('nominee')->insert(['nominee_id'=>$request->n_id, 'client_id'=>$request->c_id, 'name'=>$request->n_name,'sex'=>$request->n_gender,'birth_date'=>$request->n_dob,'nid'=>$request->c_nid, 'relationship'=>$request->n_relation,'priority'=>$request->n_priority,'phone'=>$request->c_phone]);

    //    dd($query);
      return redirect()->route('nominee')>with('nominee','nominee added!');


    }
}
