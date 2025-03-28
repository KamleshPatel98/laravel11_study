@extends('layouts.admin')

@section('content')
<x-alert />
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-4">
        <div class="card shadow">
            <div class="card-body">
                <h5 class="text-center">Login</h5>
                <form action="{{ route('loginSubmit') }}" method="POST">
                    @csrf
                    <x-input title="Email" name="email" type="email" value="{{ old('email') }}" required="true" />
                    <x-input title="Password" name="password" type="password" value="{{ old('password') }}" required="true" />
                    <div class="text-center mt-4">
                        <button class="btn btn-sm btn-primary rounded-pill col-md-6 col-lg-3" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection