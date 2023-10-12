@extends('layouts.app')

@section('title', "$post->title")

@section('content')
<div class="container">
    <article class="blog-post">
        <h2 class="blog-post-title mb-1">{{ $post->title }}</h2>
        <p class="blog-post-meta">Last update at {{ date("d M Y H:i:s", strtotime($post->updated_at)) }} BY <a href="#">laravel</a></p>
        <p>{{ $post->content }}</p>
        
        <smal class="text-muted">{{ $total_comments }} komentar</smal>
        
            @foreach ($comments as $comment)
                <div class="card mb-3">
                    <div class="card-body">
                        <p style="font-size: 8pt">
                            {{ $comment->comment }}
                        </p>
                    </div>
                </div>
            @endforeach
        </article>
        
        <a href="{{  url('posts') }}" class="btn btn-danger">Kembali</a>
</div>

@endsection    