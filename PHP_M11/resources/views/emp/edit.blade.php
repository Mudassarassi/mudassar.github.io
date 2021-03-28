@extends('layout.layout')

@section('h1')
    Edit Employe {{$emp ->name}}
@endsection
@section('content')

<form method="post" action="{{route('emp.update', $emp->id)}}">
    @csrf
    @method('put')
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" value="{{$emp ->name}}">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="{{$emp ->email}}">
    </div>
    <div class="mb-3">
        <label for="adress" class="form-label">address</label>
        <input type="text" class="form-control" id="adress" name="adress" aria-describedby="emailHelp" value="{{$emp ->adress}}">
      </div>
      <div class="mb-3">
        <label for="job" class="form-label">Job</label>
        <input type="text" class="form-control" id="job" name="job"aria-describedby="emailHelp" value="{{$emp ->job}}">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
