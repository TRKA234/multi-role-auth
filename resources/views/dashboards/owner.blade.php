@extends('layouts.app')

@section('title', 'Owner Dashboard')

@section('content')
    <div class="card">
        <div class="card-body">
            <h2>Welcome (Owner)</h2>
            <p>Halo {{ auth()->user()->name }}, ini dashboard Owner.</p>
        </div>
    </div>
@endsection
