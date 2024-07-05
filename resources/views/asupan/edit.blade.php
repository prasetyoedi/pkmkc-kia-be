@extends('layout.index')

@section('title', 'Edit Asupan')
@section('content')
<div class="container main">
    <div class="title">
        <h1>Edit Asupan</h1>
    </div>
    <div class="content">
        <form action="{{ route('asupan.update', $asupan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="bahan_makanan">Bahan Makanan</label>
                <input type="text" name="bahan_makanan" class="form-control" value="{{ $asupan->bahan_makanan }}" required>
            </div>
            <div class="form-group">
                <label for="trimester">Trimester</label>
                <select name="trimester" class="form-control" required>
                    <option value="1" {{ $asupan->trimester == 1 ? 'selected' : '' }}>Trimester 1</option>
                    <option value="2" {{ $asupan->trimester == 2 ? 'selected' : '' }}>Trimester 2</option>
                    <option value="3" {{ $asupan->trimester == 3 ? 'selected' : '' }}>Trimester 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" value="{{ $asupan->keterangan }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection