<div id="wrapper">
    <div id="page" class="container">
        <h1>Edit Article</h1>

        <form method="PUT" action="/articles/{{ $article->id}}" >
        @csrf
            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input class="input" type="text" name="title" id="title" value="{{ $article->title }}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>

                <div class="control">
                    <textarea class="textarea" name="excerpt" id="excerpt" cols="30" rows="10">{{ $article->excerpt }}</textarea>
                </div>
            </div>

            <div class="field">
                <label class="label" for="body">Body</label>

                <div class="control">
                    <textarea class="textarea" name="body" id="body" cols="30" rows="10">{{ $article->body }}</textarea>
                </div>
            </div>
            <div>
                <button type="submit">UPDATE</button>
            </div>
        </form>
    </div>

</div>