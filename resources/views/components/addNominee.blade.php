@extends('layouts.layout')
@section('title', 'Add Nominee')
@section('content')
<div class="container">
 <h2>Add Nominee</h2>
 <hr>

 <form action="" method="post">
     @csrf
    <div class="mb-3">
    <label for="id" class="form-label">Nominee Id</label>
    <input type="text" class="form-control"  name="n_id" id="exampleInputEmail1" aria-describedby="id"
     value="{{ $n_id }}">
    </div>     
    <div class="mb-3">
    <label for="cid" class="form-label">Client Id</label>
    <input type="text" class="form-control"  name="c_id" id="exampleInputEmail1" aria-describedby="cid" >
    </div>     
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" name="n_name" id="name" >
  </div>        
  <div class="mb-3">
    <label for="gender" class="form-label">Gender</label>
    <input type="text" class="form-control" name="n_gender" id="gender"  >
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
    <label for="priority" class="form-label">Priority</label>
    <input type="text" class="form-control" name="n_priority" id="priority"  >
  </div>

  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" class="form-control" name="c_phone" id="phone" >
  </div>  

 <div class="mb-3">
 <input type="submit" class="btn btn-success form-control" >

</div>
 </form>
 @endsection