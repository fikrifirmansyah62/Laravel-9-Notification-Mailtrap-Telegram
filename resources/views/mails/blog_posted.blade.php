{{-- body Mailtrap.io --}}

<div style="width: 100%">
    Haii... kamu baru saja membuat postingan di blog kamu nih...

    <div style="
        width: 100%;
        box-shadow: 1px 1px 3px grey;
        padding: 5px 20px;
        margin-top: 10px;
        font-style: italic;
        border-radius: 10px;">
        <h2> {{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
    </div>
</div>