@extends('layouts.layout')
@section('title', 'Agent')
@section('content')
<div class="container">
 <h2>Agents Information</h2>
 <hr>

 <table class="table table-bordered table-striped border-info" style="width:100%">
    <thead>
      <tr>
        <th scope="col">AGENT ID</th>
        <th scope="col">Name</th>
        <th scope="col">BRANCH</th>        
        <th scope="col">PHONE</th>       
      </tr>
    </thead>
    <tbody>
        @foreach ($agents as $agent)
          <tr>
        <th scope="row">{{ $agent->agent_id }}</th>
        <td>{{ $agent->name }}</td>
        <td>{{ $agent->branch }}</td>     
        <td>{{ $agent->phone }}</td>       
         </tr>  
        @endforeach     
    
    </tbody>
</table>

@endsection