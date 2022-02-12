@extends('layouts.layout')
@section('title', 'Nominee')
@section('content')
<div class="container">
    <a href=" {{route('addNominee')}} " class="btn btn-primary add-btn">Add Nominee</a>
 <h2>Nominees Information</h2>
 <hr>
 @if (session('nominee'))
 <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>{{session('nominee')}}</strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>  
     
 @endif

 <table class="table table-bordered table-striped border-info" style="width:100%">
    <thead>
      <tr>
          <th>Nominee id</th>
          <th>client id</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Birth date</th>
        <th>Relationship</th>
        <th>Priorty</th>
        <th>Phone</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($nominees as $nominee)
          <tr>
              <td>{{$nominee->nominee_id}} </td>
              <td>{{$nominee->client_id}} </td>
              <td> {{$nominee->name}} </td>
              <td> {{$nominee->sex}} </td>
              <td> {{$nominee->birth_date}} </td>
              <td> {{$nominee->relationship}} </td>
              <td> {{$nominee->priority}} </td>
              <td> {{$nominee->phone}} </td>
              <td ><a href="{{ route('clientStatus',['client_id'=>($nominee->client_id)] ) }}">Clients Status</a></td>
         </tr>  
        @endforeach     
    
    </tbody>
</table>

@endsection
