<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Policy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    
    public function show()
    {
        // $client = DB::table('client')->select('client_id', 'name', 'birth_date', 'nid', 'phone', 'address', 'agent_id')->get();
        $client = Client::all();
        // dd($client);
        // foreach ($client as $user) {
        //     echo $user->name;
        // };
        return view('client', ['clients' => $client]);
    }
    public function showClient()
    {
        $random_id = time();
        $nominee_id = time() . '-' .  mt_rand();
        // dd($nominee_id);
        return view('components.addClient', ['c_id' => $random_id, 'n_id' => $nominee_id]);
    }

    public function add(Request $request)
    {
        $data = $request->input('n_relation');
        // dd($data);
        $client_add = DB::table('client')->insert((['client_id' => $request->c_id, 'client_password' => $request->c_pass, 'name' => $request->c_name, 'sex' => $request->c_gender, 'birth_date' => $request->c_dob, 'marital_status' => $request->c_ma_status, 'nid' => $request->c_nid, 'phone' => $request->c_phone, 'address' => $request->c_address, 'policy_id' => $request->c_policy, 'agent_id' => $request->c_agent, 'image' => 'img.jpg']));

        $query = DB::table('nominee')->insert(['nominee_id' => $request->n_id, 'client_id' => $request->c_id, 'name' => $request->n_name, 'sex' => $request->n_gender, 'birth_date' => $request->n_dob, 'nid' => $request->c_nid, 'relationship' => $request->n_relation, 'priority' => $request->n_priority, 'phone' => $request->c_phone]);

        return redirect()->route('client')->with('status', ' New Client is added.');
    }

    public function status($client_id)
    {
        // echo $client_id;
        // $client = DB::table('client')->where('client_id', '=', $client_id)->get();
        $client = Client::where('client_id',  $client_id)->get();
        // dd($client[0]->name);
        foreach ($client as $client) {
            // echo $client->name;
        }
        //    dd( $client);
        // $policy = DB::table('policy')->where('policy_id', '=', $client->policy_id)->get();
        $policy = Policy::where('policy_id', $client->policy_id)->get();

        // dd($policy);
        foreach ($policy as $p_plan) {
            // echo $p_plan->name;
        }

        $agent = DB::table('agent')->where('agent_id', '=', $client->agent_id)->get();
        foreach ($agent as $agent_info) {
            // dd( $agent_info->name);
        }

        $nominee = DB::table('nominee')->where('client_id', '=', $client_id)->get();
        foreach ($nominee as $nominee_info) {
            // dd( $nominee_info->name); 
        }

        $payments = DB::table('payment')->where('client_id', '=', $client_id)->get();
        //   foreach ($payments as $nominee_info) {
        //     print_r ( $nominee_info->client_id);
        //   }      
        // exit;

        return view('components.clientStatus', ['client' => $client, 'plan' => $p_plan, 'agent' => $agent_info, 'nominee' => $nominee_info, 'payments' => $payments]);
    }

    public function edit($client_id , Client $clients) 
    {
        // $client =  $clients;
        // return $client;
        // dd($clients->name);

        // echo $client_id;
        $clients = DB::table('client')->where('client_id', '=', $client_id)->get();
        // dd($clients);
        foreach ($clients as $client) { 
            // echo $client->name;
        }
        return view('components.editClient', ['client' => $client]); 
    }

    public function update(Request $request, $c_id)    
    {        
        // $file = $request->img;
        // dd($file);
        if ($request->filled('c_id')) {
            // $input = $request->all();            
            // $input = $request->except(['_token']);;
            // dd($input);
            // dd($request->c_id);
            $id = $request->input('c_id');
            $client_update = DB::table('client')->where('client_id', '=', $id)->update(( ['client_id' => $request->c_id, 'client_password' => $request->c_pass, 'name' => $request->c_name, 'sex' => $request->c_gender, 'birth_date' => $request->c_dob, 'marital_status' => $request->c_ma_status, 'nid' => $request->c_nid, 'phone' => $request->c_phone, 'address' => $request->c_address, 'policy_id' => $request->c_policy] ));

            // dd($client_update);
            return redirect()->route('client')->with('status', 'The client is update');
        }
       
    }
    public function delete($client_id)
    {
        $p_deleted = DB::table('payment')->where('client_id', '=', $client_id)->delete();
        $n_deleted = DB::table('nominee')->where('client_id', '=', $client_id)->delete();
        $c_deleted = DB::table('client')->where('client_id', '=', $client_id)->delete();
        // dd($deleted);
        return redirect()->route('client')->with('status', 'The all client record deleted');
    }
}
