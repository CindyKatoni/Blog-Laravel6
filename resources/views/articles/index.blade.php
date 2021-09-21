<div>
    <ul>
        @forelse ($articles as $article)    
        <li>
            <h3>
               <a href="/articles/{{ $article->id }}"> {{ $article->title }} </a> 
            </h3> 
            <p>{{ $article->excerpt }}</p>
            <p>{{ $article->body }}</p>
        </li>
        @empty
        <p>No relevant articles yet.</p>
        @endforelse
    </ul>


</div>

