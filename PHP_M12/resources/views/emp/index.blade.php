@extends('layouts.layout')



@section('content')

<a type="button" class="btn btn-primary" href="{{route('emp.create')}}">Add employee</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Job</th>
        <th scope="col">Adress</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($emp as $employe)


      <tr>
        <th scope="row">{{$employe -> id}}</th>
        <td>{{$employe -> name}}</td>
        <td>{{$employe -> email}}</td>
        <td>{{$employe -> job}}</td>
        <td>{{$employe -> adress}}</td>
        <td><a type="button" class="btn btn-danger" href="{{route('emp.edit', $employe-> id)}}">Edit</a>
            <form method="post" action="{{route('emp.destroy', $employe-> id)}}">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-warning">Delete</button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endsection
