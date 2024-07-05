@extends('layout.index')

@section('title', 'PKM KIA - Asupan')
@section('content')
<div class="container main">
    <div class="title">
        <h1>ASUPAN</h1>
    </div>
    <div class="content">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @elseif(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <a href="{{ route('asupan.create') }}" class="btn btn-primary">Tambah Asupan</a>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Bahan Makanan</th>
                    <th>Trimester</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $key => $asupan)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $asupan->bahan_makanan }}</td>
                    <td>{{ $asupan->trimester }}</td>
                    <td>{{ $asupan->keterangan }}</td>
                    <td>
                        <a href="{{ route('asupan.edit', $asupan->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('asupan.destroy', $asupan->id) }}" method="POST"
                            style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">No data available.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection