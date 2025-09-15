@extends('layouts.app')

@section('title', 'Tambah Item')

@section('content')
    <h3>Tambah Item</h3>
    <form method="POST" action="{{ route('admin.items.store') }}">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stock" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="number" step="0.01" name="price" class="form-control" required>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.items.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection