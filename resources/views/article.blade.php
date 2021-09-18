<div>
    <ul>
        @foreach ($articles as $article)    
        <li>
            <h3>{{ $article->title }}</h3>
            <p>{{ $article->body }}</p>
        </li>
        @endforeach
    </ul>


</div>