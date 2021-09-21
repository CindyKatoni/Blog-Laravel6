
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script async defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
    
<!-- <div class="container">
    <div class="container-fluid">
        <h1>New Article</h1>

        <form method="POST" action="/articles" >
        @csrf
            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input 
                    class="input" 
                    type="text" 
                    name="title" 
                    id="title"
                    value="{{old('title')}}">

                    @error('title')
                    <p>{{ $errors->first('title')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>

                <div class="control">
                    <textarea 
                    class="textarea" 
                    name="excerpt" 
                    id="excerpt" 
                    cols="30" 
                    rows="10">{{old('excerpt')}}</textarea>

                    @error('excerpt')
                    <p>{{ $errors->first('excerpt')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="body">Body</label>

                <div class="control">
                    <textarea 
                    class="textarea" 
                    name="body" 
                    id="body" 
                    cols="30" 
                    rows="10">{{old('body')}}</textarea>

                    @error('body')
                    <p>{{ $errors->first('body')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="tags">Tags</label>

                <div class="control">
                    <select name="tags[]">//Display different tags here...</select>

                    @error('tags')
                        <p>{{ $message}}</p>
                    @enderror
                </div>
            </div>



            <div>
                <button type="submit">SUBMIT</button>
            </div>
        </form>
    </div>

</div> -->


<div class="container">
    <h1>Create New Article</h1>

<form method="POST" action="/articles"class="row g-3">
@csrf

  <div class="col-12">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" placeholder="Enter Title">
    @error('title')
      <p>{{ $errors->first('title')}}</p>
    @enderror
  </div>


  <div class="col-12">
    <label for="excerpt" class="form-label">Excerpt</label>
    <textarea class="form-control" name="excerpt" id="excerpt" rows="3">{{old('excerpt')}}</textarea>
    @error('excerpt')
      <p>{{ $errors->first('excerpt')}}</p>
    @enderror
  </div>

  <div class="col-12">
    <label for="body" class="form-label">Body</label>
    <textarea class="form-control" name="body"  id="body" rows="3">{{old('body')}}</textarea>
    @error('body')
      <p>{{ $errors->first('body')}}</p>
    @enderror
  </div>

  
  <div class="col-auto my-1">
      <label class="mr-sm-2" for="tags">Preference</label>
      <select name="tags[]" class="custom-select mr-sm-2" id="tags">
        //Display Different Tags Here
      </select>
      @error('tags')
        <p>{{ $message}}</p>
      @enderror
    </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">SUBMIT</button>
  </div>

</form>
</div>

</body>
</html>