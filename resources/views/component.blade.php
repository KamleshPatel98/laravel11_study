@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Component</h1>
            </div>
            <form action="">
                <div class="row">
                    <x-input title="{{ 'Name' }}" type="{{ 'text' }}" name="{{ 'name' }}" placeholder="{{ 'placeholder' }}" required />
                    <x-input title="Email" type="{{ 'email' }}" name="{{ 'email' }}" id="{{ 'Email' }}" value="{{ 'admin@gmail.com' }}" maxlength="100" onkeyup="{{ 'app();' }}" />
                </div>
            </form>
        </div>
    </div>
@endsection