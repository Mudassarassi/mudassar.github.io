@extends('layouts.layout')

@section('h1')
    Employees
@endsection

@section('content')
<form method="post" action="{{route('emp.update', $emp->id)}}">
    @csrf
    @method('put')
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="{{$emp-> name}}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{$emp-> email}}">
      </div>
      <div class="mb-3">
        <label for="job" class="form-label">Job</label>
        <input type="text" class="form-control" id="job" name="job" aria-describedby="emailHelp" value="{{$emp-> job}}">
      </div>
      <div class="mb-3">
        <label for="adress" class="form-label">Adress</label>
        <input type="text" class="form-control" id="adress" name="adress" aria-describedby="emailHelp" value="{{$emp-> adress}}">
      </div>
      <button type="submit" class="btn btn-primary">Save detail</button>

@endsection
