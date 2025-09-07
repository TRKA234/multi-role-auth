@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3 ">Login</h4>
                    <form method="POST" action="{{ route('login.post') }}">
                        @csrf
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button class="btn btn-primary w-100">Login</button>
                    </form>
                    <hr>
                    <p class="small">Coba login dengan:<br>
                        admin@example.test | password<br>
                        owner@example.test | password<br>
                        customer@example.test | password
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
