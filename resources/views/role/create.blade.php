@extends('role.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Role Page</div>
  <div class="card-body">
      
      <form action="{{ url('role') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Notes</label></br>
        <input type="text" name="notes" id="notes" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop