@extends('layouts/layout')
@section('title', 'Home')
@section('content')
<h2 class="">Home page</h2>

<div class="p-3 mt-5 border border-secondary rounded">
    <form action="" id="form">
         <div class="mb-2 ">
         <input type="text" class="form-control" name="username" id="s_input" placeholder="search" >
         </div>
         <button type="submit" name="submit" id="search" class="btn btn-primary" style="display: block; width: 100%;position: relative;">Search</button>
    </form>
</div>

<div class="row m-3 text-center justify-content-center gx-5 mt-5">
    <div class="col-md-4 col-lg-4 m-2   pt-3" style="height:150px; background:#459fcb; border-radius:5px;width:auto ">
     <span><i class="fas fa-user fa-3x pb-1"></i></span>
     <h5 class="m-2">TOTAL CLIENTS: {{ $client_to }}</h5>
     </div>

    <div class="col-md-4 col-lg-4 m-2   pt-3 " style="height:150px; background:#459fcb;border-radius:5px;width:auto ">
     <span><i class="fas fa-dollar-sign fa-3x pb-1"></i></span>
     <h5 class="m-2">PAYMENTS RECORDS: {{$payment_to}}</h5>
 </div>
    <div class="col-md-4 col-lg-4 m-2   pt-3" style="height:150px; background:#459fcb; border-radius:5px;width:auto ">
     <span><i class="fas fa-user-md fa-3x pb-1"></i></span>
     <h5 class="m-2">TOTAL AGENTS: {{$agent_to}} </h5>
 </div>
</div>             

@endsection
