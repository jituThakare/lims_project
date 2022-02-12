@extends('layouts.layout')
@section('title', 'Payment')
@section('content')
<div class="container">
    <a href=" {{route('addPayment')}} " class="btn btn-primary add-btn">Add Payment</a>
 <h2>Payments information</h2>
 <hr>

 <table class="table table-bordered table-striped border-info" style="width:100%">
    <thead>
      <tr>
          <th>Receipt no</th>
          <th>client id</th>
        <th>month</th>
        <th>Amount</th>
        <th>Due</th>
        <th>Fine</th>
        <th>Update</th>       
      </tr>
    </thead>
    <tbody>
        @foreach ($payments as $payment)
          <tr>
              <td>{{$payment->recipt_no}} </td>
              <td>{{$payment->client_id}} </td>
              <td> {{$payment->month}} </td>
              <td> {{$payment->amount}} </td>
              <td> {{$payment->due}} </td>
              <td> {{$payment->fine}} </td>
          
                 @if ( $payment->agent_id == session('name') || "ahmed" == session('name') )
                <td><a href="{{ route('editPayment',['receipt_id'=>($payment->recipt_no)] ) }}">
                    Edit</a>   </td>                    
               @else
               <td class="disabled">Edit</td>                    

               @endif
         </tr>  
        @endforeach     
    
    </tbody>
</table>


 @endsection