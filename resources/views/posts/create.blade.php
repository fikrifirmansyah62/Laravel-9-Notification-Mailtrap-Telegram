@extends('layouts.app')

@section('title', 'Create New Post')

@section('content')
<div class="container">
    <h1 class="text-center">Buat Postingan Baru</h1>

    <form method="POST" action="{{ url('posts') }}" class="form-control">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Konten</label>
            <textarea class="form-control" name="content" id="content" rows="7"></textarea>
        </div>
        <button type="submit" class="btn btn-info">Simpan</button>
    </form>
</div>
@endsection
