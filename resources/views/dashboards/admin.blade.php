@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="card">
        <div class="card-body">
            <h2>Welcome (Admin)</h2>
            <p>Halo {{ auth()->user()->name }}, ini dashboard Admin.</p>
        </div>
    </div>
@endsection