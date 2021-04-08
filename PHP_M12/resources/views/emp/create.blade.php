@extends('layouts.layout')

@section('h1')
    Employees
@endsection

@section('content')
<form method="post" action="{{route('emp.store')}}">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Namwe</label>
      <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
      @error('name')
      <div class="alert alert-danger">Your name</div>
      @enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        @error('email')
        <div class="alert alert-danger">Your email</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="job" class="form-label">Job</label>
        <input type="text" class="form-control" id="job" name="job" aria-describedby="emailHelp">
        @error('job')
        <div class="alert alert-danger">You Job</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="adress" class="form-label">address</label>
        <input type="text" class="form-control" id="adress" name="adress" aria-describedby="emailHelp">
        @error('adress')
        <div class="alert alert-danger">Your Adress</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Add employe</button>

@endsection
