@extends('layouts.app')

@section('title', 'Edit Pots')

@section('content')
<div class="container">
    <h1 class="text-center">Edit Postingan</h1>
    
    <form method="POST" action="{{ url("posts/$post->id") }}" class="form-control">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Konten</label>
            <textarea class="form-control" name="content" id="content" rows="7">{{ $post->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-info">Simpan</button>
    </form>
    <form method="POST" action="{{ url("posts/$post->id") }}" class="form-control" >
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
</div>
@endsection

