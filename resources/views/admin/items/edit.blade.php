@extends('layouts.app')

@section('title', 'Edit Item')

@section('content')
    <h3>Edit Item</h3>
    <form method="POST" action="{{ route('admin.items.update', $item) }}" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $item->name }}" required>
        </div>
        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stock" class="form-control" value="{{ $item->stock }}" required>
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="number" step="0.01" name="price" class="form-control" value="{{ $item->price }}" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control">{{ $item->description }}</textarea>
        </div>
        <div class="mb-3">
            <label>Gambar</label>
            <input type="file" name="image" class="form-control">
            @if($item->image)
                <img src="{{ asset('storage/' . $item->image) }}" width="100" class="mt-2">
            @endif
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('admin.items.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection