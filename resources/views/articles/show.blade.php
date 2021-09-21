<div class="container">
    <div class="title">
        <h2>{{ $article->title }}</h2>
        <!-- <p>{{ $article->body }}</p> -->
        {!! $article->body !!}

        <p>
        @foreach ($tags as $tag)
            <a href="#">{{ $tag->name }}</a>
        #endforeach    
        </p>
    
    </div>
</div>