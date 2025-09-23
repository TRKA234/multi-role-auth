@extends('layouts.admin')

@section('title', 'Detail Item')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Detail Item</h4>
        </div>
        <div class="card-body">
            @if($item->image)
                <img src="{{ asset('storage/' . $item->image) }}" width="200" class="mb-3 rounded">
            @endif
            <h5>{{ $item->name }}</h5>
            <p><strong>Stok:</strong> {{ $item->stock }}</p>
            <p><strong>Harga:</strong> Rp {{ number_format($item->price, 0, ',', '.') }}</p>
            <p><strong>Deskripsi:</strong><br>{{ $item->description }}</p>
            <a href="{{ route('admin.items.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@endsection