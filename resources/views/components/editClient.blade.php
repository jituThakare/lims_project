@extends('layouts.layout')
@section('title', 'Edit client')
@section('content')
    <div class="container">
        <h2>Client Information</h2>
        <hr>

        <form  method="post">
            @csrf
            <div class="client_info">
                <img src="" class="client_img" alt="client_image">  
                <div class="mb-3">
                    <input type="file" name="img" id="img" >
                </div>     
              <div class="mb-3">
               <label for="id" class="form-label">Client Id</label>
               <input type="text" class="form-control"  name="c_id" id="exampleInputEmail1" value=" {{$client->client_id}} " aria-describedby="id" >
             </div>
             <div class="mb-3">
               <label for="passwod" class="form-label">Client Password</label>
               <input type="text" class="form-control"  name="c_pass" id="password" value=" {{$client->client_password}} " >
             </div>
             <div class="mb-3">
               <label for="name" class="form-label">Name</label>
               <input type="text" class="form-control" name="c_name" id="name" value=" {{$client->name}} " >
             </div>
             <div class="mb-3">
               <label for="gender" class="form-label">Gender</label>
               <input type="" class="form-control" name="c_gender" id="gender" value=" {{$client->sex}} " >
             </div>
             <div class="mb-3">
               <label for="date" class="form-label">Birth date</label>
               <input type="text" class="form-control" name="c_dob" id="date" value=" {{$client->birth_date}} " >
             </div>
             <div class="mb-3">
               <label for="m_status" class="form-label">Maritual status</label>
               <input type="" class="form-control" name="c_ma_status" id="m_status" value=" {{$client->marital_status}} " >
             </div>
             <div class="mb-3">
               <label for="nid" class="form-label">Nid</label>
               <input type="text" class="form-control" name="c_nid" id="nid" value=" {{$client->nid}} " >
             </div>
             <div class="mb-3">
               <label for="phone" class="form-label">Phone</label>
               <input type="text" class="form-control" name="c_phone" id="phone" value=" {{$client->phone}} " >
             </div>
             <div class="mb-3">
               <label for="address" class="form-label">Address</label>
               <input type="text" class="form-control" name="c_address" id="address" value=" {{$client->address}} " >
             </div>
             <div class="mb-3">
               <label for="p_id" class="form-label">Policy id</label>
               <input type="text" class="form-control" name="c_policy" id="p_id" value=" {{$client->policy_id}} " >
             </div>
             <div class="mb-3">
             <input type="submit" name="update" class="btn btn-success form-control" value="update">
             </div>
             <a href=" {{ route('deleteClient', ['client_id'=>($client->client_id)]) }}">Delete Client</a>
   
            </div>
        </form>
    </div>
@endsection