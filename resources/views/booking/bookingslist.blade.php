@extends('layouts.app')
@section('stylesheets')

@endsection
@section('content')
<div class="container">
    <table class="table table-dark" style="color: orange;
        background-color:sienna;
        border-style:solid ">
        <thead style="background-color: chocolate;color: black">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full_Name</th>
      <th scope="col">Email</th>
      <th scope="col">Payment</th>
      <th scope="col">Package_id</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($listofbookings  as $li)  
    <tr>
      <th scope="row">{{$li->id}}</th>
      <td>{{$li->FullName}}</td>
      <td>{{$li->Email}}</td>
      <td>{{$li->Payment}}</td>
      <td>{{$li->Package_id}}</td>
      <td><a href="#" class="btn  btn-sm" style="background-color: blanchedalmond">Confirm</a></td>
      
    </tr>
    @endforeach
  </tbody>
</table>
</div>
  @endsection
       

