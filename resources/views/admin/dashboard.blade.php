@extends('layouts.admin')

@section('content')
    <h3>{{ Auth::user()->name }}</h3>
    <h4>{{ Auth::user()->created_at }}</h4>
    <img src="{{ Auth::user()->image }}" alt="Image" width="100px;" height="100px;">
@endsection