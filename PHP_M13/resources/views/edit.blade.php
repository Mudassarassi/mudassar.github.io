@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('reserva.show',  Auth::user()->id) }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('reserva.update',$reserva->id) }}" method="POST">
        @csrf
        @method('PUT')

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
              <div class="alert alert-danger">Check In DAte</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="dateOut" class="form-label">checkout date</label>
              <input type="date" class="form-control" id="dateOUT" name="dateOUT" aria-describedby="emailHelp">
              @error('job')
              <div class="alert alert-danger">Check outDate </div>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">Change Booking</button>

    </form>
@endsection
