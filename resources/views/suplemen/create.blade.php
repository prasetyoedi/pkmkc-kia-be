@extends('layout.index')

@section('title', 'PKM KIA - Suplemen')
@section('content')
<div class="container main">
    <div class="title">
        <h1>Tambah Suplemen</h1>
    </div>
    <div class="content">
        <form action="{{ route('suplemen.store') }}" method="post">
            @csrf
            <div class="form-group row">
                <label for="suplemen" class="col-sm-3 col-form-label">Suplemen</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="suplemen" name="suplemen">
                </div>
            </div>
            <div class="form-group row">
                <label for="trimester" class="col-sm-3 col-form-label">Trimester</label>
                <div class="col-sm-9">
                    <select class="form-control" id="trimester" name="trimester">
                        <option value="">Pilih Trimester</option>
                        <option value="1">Trimester 1</option>
                        <option value="2">Trimester 2</option>
                        <option value="3">Trimester 3</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="keterangan" name="keterangan">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection