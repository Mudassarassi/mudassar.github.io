@extends('layout.layout')

@section('h1')
Employees List

@endsection

@section('content')

<a type="button" class="mb-3 btn btn-primary" href="{{route('emp.create')}}">Add Employees</a>

<form method="get" action="{{route('emp.search')}}">
    <div class="mb-3">
      <input type="text" name='search' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Search By Job</button>
  </form>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Adress</th>
        <th scope="col">Job</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($emp as $employe)


      <tr>
        <th scope="row">{{$employe-> id}}</th>
        <td>{{$employe-> name}}</td>
        <td>{{$employe-> adress}}</td>
        <td>{{$employe-> job}}</td>
        <td>
        <a type="button" class="btn btn-danger" href="{{route('emp.edit', $employe-> id)}}">Edit</a>
        <form method="post" action="{{route('emp.destroy', $employe->id)}}">
            @csrf
            @method('delete')
            <div class="mb-3">
                <button type="submit" class="btn btn-warning">Delete</button>
            </div>
        </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection
