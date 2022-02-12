@extends('layouts.layout')
@section('title', 'Policys')
@section('content')
<div class="container">
 <h2>Policys Information</h2>
 <hr>

 <table class="table table-bordered table-striped border-info table-responsive" style="width:100%">
    <thead>
      <tr>
        <th>POLICys ID</th>
        <th>TERM</th>
        <th>TOTAL AMOUNT</th>
        <th>PER MONTH</th>
        <th>PAYMENT METHOD</th>
        <th>COVERAGE</th>
        <th>AGE LIMIT</th>     
      </tr>
    </thead>
    <tbody>
        @foreach ($policys as $policy)
          <tr>
            <td>{{ $policy->policy_id }}</td>
            <td>{{ $policy->term }}</td>
            <td>{{ $policy-> health_status}}</td>
            <td>{{ $policy->system}}</td>
            <td>{{ $policy-> payment_method}}</td>
            <td>{{ $policy->coverage}}</td>
            <td>{{ $policy->age_limit }}</td> 
         </tr>  
        @endforeach     
    
    </tbody>
</table>

@endsection
