@extends('layout.layout')

@section('h1')
    Create Employe
@endsection
@section('content')

<form method="post" action="{{route('emp.store')}}">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
      @error('name')
      <div class="alert alert-danger">Your name</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      @error('email')
      <div class="alert alert-danger">Your email</div>
      @enderror
    </div>
    <div class="mb-3">
        <label for="adress" class="form-label">address</label>
        <input type="text" class="form-control" id="adress" name="adress" aria-describedby="emailHelp">
        @error('name')
      <div class="alert alert-danger">Your adress</div>
      @enderror
      </div>
      <div class="mb-3">
        <label for="job" class="form-label">Job</label>
        <input type="text" class="form-control" id="job" name="job"aria-describedby="emailHelp">
        @error('name')
      <div class="alert alert-danger">Your Job</div>
      @enderror
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
