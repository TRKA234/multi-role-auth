@extends('layouts.app')

@section('title', 'Customer Dashboard')

@section('content')
    <div class="card">
        <div class="card-body">
            <h2>Welcome (Customer)</h2>
            <p>Halo {{ auth()->user()->name }}, ini dashboard Customer.</p>
        </div>
    </div>
@endsection
