
@extends('role.layout')
@section('content')
<div class="card">
  <div class="card-header">Role Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $roles->name }}</h5>
        <h5 class="card-title">Notes : {{ $roles->notes }}</h5>

  </div>
      
    </hr>
  
  </div>
</div>