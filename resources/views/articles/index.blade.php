<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script async defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
    

<div class="container">
<div class="row">
@forelse ($articles as $article) 
<div class="col">

<div class="card mb-3 w-75" >
  <div class="card-body">
    <h5 class="card-title"><a href="/articles/{{ $article->id }}"> {{ $article->title }} </a> </h5>
    <p class="card-text">{{ $article->excerpt }}</p>
    <p class="card-text">{{ $article->body }}</p>
    
  </div>
 
</div>
@empty
<p>No relevant articles yet.</p>
@endforelse
</div>
</div>




    <!-- <ul>
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
    </ul> -->

</div>
</body>
</html>




