<div>
    <ul>
        @foreach ($articles as $article)    
        <li>
            <h3>
               <a href="/articles/{{ $article->id }}"> {{ $article->title }} </a> 
            </h3> 
            <p>{{ $article->excerpt }}</p>
            <p>{{ $article->body }}</p>
        </li>
        @endforeach
    </ul>


</div>