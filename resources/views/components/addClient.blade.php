@extends('layouts.layout')
@section('title', 'Add client')
@section('content')
<div class="container">
 <h2>Add Client</h2>
 <hr>

 <form  method="post">
    @csrf
    <div class="client_info">
           
      <div class="mb-3">
       <label for="id" class="form-label">Client Id</label>
       <input type="text" class="form-control"  name="c_id" id="exampleInputEmail1" aria-describedby="id"
       value=" {{$c_id}} " >
     </div> 
     <div class="mb-3">
       <label for="passwod" class="form-label">Client Password</label>
       <input type="text" class="form-control"  name="c_pass" id="password"  >
     </div>
     <div class="mb-3">
       <label for="name" class="form-label">Name</label>
       <input type="text" class="form-control" name="c_name" id="name" >
     </div>
     {{-- <div class="mb-3">
            <input type="file" name="img" id="img"> 
    </div>    --}}
     <div class="mb-3">
       <label for="gender" class="form-label">Gender</label>
       <input type="" class="form-control" name="c_gender" id="gender"  >
     </div>
     <div class="mb-3">
       <label for="date" class="form-label">Birth date</label>
       <input type="text" class="form-control" name="c_dob" id="date"  >
     </div>
     <div class="mb-3">
       <label for="m_status" class="form-label">Maritual status</label>
       <input type="" class="form-control" name="c_ma_status" id="m_status" >
     </div>
     <div class="mb-3">
       <label for="nid" class="form-label">Nid</label>
       <input type="text" class="form-control" name="c_nid" id="nid"  >
     </div>
     <div class="mb-3">
       <label for="phone" class="form-label">Phone</label>
       <input type="text" class="form-control" name="c_phone" id="phone" >
     </div>
     <div class="mb-3">
       <label for="address" class="form-label">Address</label>
       <input type="text" class="form-control" name="c_address" id="address"  >
     </div>
     <div class="mb-3">
       <label for="p_id" class="form-label">Policy id</label>
       <input type="text" class="form-control" name="c_policy" id="p_id" >
     </div>
     <div class="mb-3">
       <label for="a_id" class="form-label">Agent id</label>
       <input type="text" class="form-control" name="c_agent" id="a_id" value="{{session('name')}}" >
     </div>

     <h5 style="font-size:25px;margin:20px 0">Nominee Informations</h5>

     <div class="mb-3">
        <label for="id" class="form-label">Nominee Id</label>
        <input type="text" class="form-control"  name="n_id" id="exampleInputEmail1" aria-describedby="id"
        value=" {{$n_id}} " >
      </div>     
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="n_name" id="name" >
      </div>        
      <div class="mb-3">
        <label for="gender" class="form-label">Gender</label>
        <input type="" class="form-control" name="n_gender" id="gender"  >
      </div>
      <div class="mb-3">
        <label for="date" class="form-label">Birth date</label>
        <input type="text" class="form-control" name="n_dob" id="date"  >
      </div>
      <div class="mb-3">
        <label for="nid" class="form-label">National id</label>
        <input type="text" class="form-control" name="c_nid" id="nid"  >
      </div>
      <div class="mb-3">
        <label for="address" class="form-label">Relationship</label>
        <input type="text" class="form-control" name="n_relation" id="address"  >
      </div>
      <div class="mb-3">
        <label for="address" class="form-label">Priority</label>
        <input type="text" class="form-control" name="n_priority" id="address"  >
      </div>

      <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" name="c_phone" id="phone" >
      </div>  

     <div class="mb-3">
     <input type="submit" name="submit" class="btn btn-success form-control" >

    </div>
</form>
</div>

    
@endsection