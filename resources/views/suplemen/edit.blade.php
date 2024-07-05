@extends('layout.index')

@section('title', 'Edit Suplemen')
@section('content')
<div class="container main">
    <div class="title">
        <h1>Edit Suplemen</h1>
    </div>
    <div class="content">
        <form action="{{ route('suplemen.update', $suplemen->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="suplemen">Suplemen</label>
                <input type="text" name="suplemen" class="form-control" value="{{ $suplemen->suplemen }}" required>
            </div>
            <div class="form-group">
                <label for="trimester">Trimester</label>
                <select name="trimester" class="form-control" required>
                    <option value="1" {{ $suplemen->trimester == 1 ? 'selected' : '' }}>Trimester 1</option>
                    <option value="2" {{ $suplemen->trimester == 2 ? 'selected' : '' }}>Trimester 2</option>
                    <option value="3" {{ $suplemen->trimester == 3 ? 'selected' : '' }}>Trimester 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" value="{{ $suplemen->keterangan }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection