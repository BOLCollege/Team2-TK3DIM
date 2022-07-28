@extends('role.layout')
@section('content')
<div class="card">
  <div class="card-header">Role Page</div>
  <div class="card-body">
      
      <form action="{{ url('role/' .$roles->idRole) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="idRole" id="idRole" value="{{$roles->idRole}}" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$roles->name}}" class="form-control"></br>
        <label>Notes</label></br>
        <input type="text" name="notes" id="notes" value="{{$roles->notes}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop