
@extends("layouts.dashboard")
@section("content")


<form method="post" action="{{route('reserva.store')}}">
    @csrf
   <div class="mb-3">
      <label for="name" class="form-label">Your Name</label>
      <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
      @error('name')
      <div class="alert alert-danger">Your name</div>
      @enderror
    </div>
    <div class="mb-3">
        <label for="dateIN" class="form-label">Check in date</label>
        <input type="date" class="form-control" id="dateIN" name="dateIN" aria-describedby="emailHelp">
        @error('email')
        <div class="alert alert-danger">Your email</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="dateOut" class="form-label">checkout date</label>
        <input type="date" class="form-control" id="dateOUT" name="dateOUT" aria-describedby="emailHelp">
        @error('job')
        <div class="alert alert-danger">You Job</div>
        @enderror
      </div>

      <button type="submit" class="btn btn-primary">Reserve Room</button>

@endsection
