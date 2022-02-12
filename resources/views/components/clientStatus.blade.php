@extends('layouts.layout')
@section('title', 'Client status')
@section('content')
    <div class="container">
        <h2>CLIENTS STATUS</h2>
        <hr>
         <div class="client_info">
             <img src="" class="client_img" alt="client_image">       
           <div class="mb-3">
            <label for="id" class="form-label">Client Id</label>
            <input type="text" class="form-control"  name="" id="exampleInputEmail1" value=" {{$client->client_id}} " aria-describedby="id" disabled>
          </div>
          <div class="mb-3">
            <label for="passwod" class="form-label">Client Password</label>
            <input type="text" class="form-control"  name="" id="password" value=" {{$client->client_password}} " disabled>
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="" id="name" value=" {{$client->name}} " disabled>
          </div>
          <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <input type="" class="form-control" name="" id="gender" value=" {{$client->sex}} " disabled>
          </div>
          <div class="mb-3">
            <label for="date" class="form-label">Birth date</label>
            <input type="date" class="form-control" name="" id="date" value=" {{$client->birth_date}} " disabled>
          </div>
          <div class="mb-3">
            <label for="m_status" class="form-label">Maritual status</label>
            <input type="" class="form-control" name="" id="m_status" value=" {{$client->marital_status}} " disabled>
          </div>
          <div class="mb-3">
            <label for="nid" class="form-label">Nid</label>
            <input type="text" class="form-control" name="" id="nid" value=" {{$client->nid}} " disabled>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" name="" id="phone" value=" {{$client->phone}} " disabled>
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" name="" id="address" value=" {{$client->address}} " disabled>
          </div>
          <div class="mb-3">
            <label for="p_id" class="form-label">Policy id</label>
            <input type="text" class="form-control" name="" id="p_id" value=" {{$client->policy_id}} " disabled>
          </div>
          <a href=" {{ route('editClient', ['client_id'=>($client->client_id)]) }}">Edit Client</a>

         </div>

         <label for="">Policy Information</label>
         <div class="mb-5">
              <table class="table ">
                <thead class="table-dark">
                    <tr>
                    <th>POLICY ID</th>
                    <th>TERM</th>
                    <th>TOTAL AMOUNT</th>
                    <th>PER MONTH</th>
                    <th>PAYMENT METHOD</th>
                    <th>COVERAGE</th>
                    <th>AGE LIMIT</th>
                    </tr>
                </thead>
                <tbody class="">
                    <tr>
                <td>{{ $plan->policy_id }}</td>
                <td>{{ $plan->term }}</td>
                <td>{{ $plan-> health_status}}</td>
                <td>{{ $plan->system}}</td>
                <td>{{ $plan-> payment_method}}</td>
                <td>{{ $plan->coverage}}</td>
                <td>{{ $plan->age_limit }}</td>
                </tr>
                </tbody>
            </table>

         </div>

         <label for="">Agent</label>
         <div class="mb-5">
              <table class="table">
            <thead class="table-dark">
                <th>AGENT ID</th>
                <th>NAME</th>
                <th>BRANCH</th>
                <th>PHONE</th>                
            </thead>
            <tbody>
              <td>{{ $agent->agent_id }}</td>
              <td> {{$agent->name}} </td>
              <td> {{$agent->branch}} </td>
              <td> {{$agent->phone}} </td>
              
            </tbody>
          </table>
         </div>
         <label for="">Nominee</label><a href=" {{ route('addNominee') }} ">Add Nominee</a>
         <div class="mb-5">
              <table class="table">
            <thead class="table-dark">
                <th>Name</th>
                <th>Gender</th>
                <th>Birth date</th>
                <th>Relationship</th>
                <th>Priorty</th>
                <th>Phone</th>
                <th>Update</th>
            </thead>
            <tbody>
              <td> {{$nominee->name}} </td>
              <td> {{$nominee->sex}} </td>
              <td> {{$nominee->birth_date}} </td>
              <td> {{$nominee->relationship}} </td>
              <td> {{$nominee->priority}} </td>
              <td> {{$nominee->phone}} </td>
              @if ( $client->agent_id == session('name') || "ahmed" == session('name') )
              <td><a href="{{ route('editClient',['client_id'=>($client->client_id)] ) }}">
                  Edit</a>   </td>                    
             @else
             <td class="disabled">Edit</td>                    

             @endif
            </tbody>
          </table>
         </div>
         <label for="">Payments</label><a href=" {{route('addPayment')}} ">Add Payment</a>
         <div class="mb-5">
              <table class="table">
            <thead class="table-dark">
                <th>Receipt no</th>
                <th>Client id</th>
                <th>Month</th>
                <th>Amount</th>
                <th>Due</th>
                <th>fine</th>
                <th>update</th>
            </thead>
            <tbody>
                @foreach ($payments as $payment)
                <tr>
                    <td> {{ $payment->recipt_no }} </td>
                    <td> {{ $payment->client_id }} </td>
                    <td> {{ $payment->month }} </td>
                    <td> {{ $payment->amount }} </td>
                    <td> {{ $payment->due }} </td>
                    <td> {{ $payment->fine }} </td>    
                    @if ( $client->agent_id == session('name') || "ahmed" == session('name') )
                    <td><a href="{{ route('editClient',['client_id'=>($client->client_id)] ) }}">
                        Edit</a>   </td>                    
                   @else
                   <td class="disabled">Edit</td>                    
   
                   @endif
                </tr>  
                @endforeach
            
            </tbody>
          </table>
         </div>     
  

    </div>


@endsection