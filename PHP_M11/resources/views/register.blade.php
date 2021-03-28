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
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="adress" class="form-label">address</label>
        <input type="text" class="form-control" id="adress" name="adress" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Select</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
