@extends('layout.layout')

@section('h1')
    Welcome
@endsection

@section('content')
    <h2>Hello {{session('user')}}</h2>
@endsection

