<div class="container">
    <div class="title">
        <h2>{{ $article->title }}</h2>
        <!-- <p>{{ $article->body }}</p> -->
        {!! $article->body !!}

        <p>
        @foreach ($article->tags as $tag)
            <a href="/articles?tag={{ $tag->name }}">{{ $tag->name }}</a>
        @endforeach    
        </p>
    
    </div>
</div>