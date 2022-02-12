@extends('layouts.layout')
@section('name','Clients')
@section('content')
<div class="container mt-3">
    <a href=" {{route('addClient')}} " class="btn btn-primary add-btn">Add Client</a>
    <h2>CLIENTS INFORMATION</h2>
    <hr>
<div>
  @if (session('status'))  
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>{{session('status')}}</strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>          
  @endif
    <table class="table table-bordered table-striped border-info" style="width:100%">
            <thead>
              <tr>
                <th scope="col">CLIENT ID</th>
                <th scope="col">Name</th>
                <th scope="col" style="width:10%">Birth Date</th>
                <th scope="col">Nid</th>
                <th scope="col">PHONE</th>
                <th scope="col" style="width:15%">ADDRESS</th>
                <th  style="width:12%">STATUS</th>
                <th scope="col">UPDATE</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                  <tr>
                    <th scope="row">{{ $client->client_id }}</th>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->birth_date }}</td>
                    <td>{{ $client->nid }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->address }}</td>
                    <td ><a href="{{ route('clientStatus',['client_id'=>($client->client_id)] ) }}">Clients Status</a></td>
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