<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script async defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
<form method="POST" action="/contact" class="row g-3">
    @csrf

  <div class="col-12">
    <label for="email" class="form-label">Email Address</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email Here...">
  </div>
 
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary">SUBMIT</button>
  </div>
</form>

</div>

</body>
</html> -->

<!DOCTYPE html>
<html class="h-full">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <title>Mail Lesson</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
          rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-full">
    <form method="POST" action="/contact"
          class="bg-white p-6 rounded shadow-md"
          style="width: 300px">
        @csrf
        <div class="mb-5">
            <label for="email"
                   class="block text-xs uppercase font-semibold mb-1"
            >Email Address</label>
            <input id="email" type="text"  name="email"
                   class="border px-2 py-1 text-sm w-full">

            @error('email')       
                   <div class="text-red-500 text-xs">{{ $message }}</div>
            @enderror       
        </div>
        <button type="submit" 
                class="bg-blue-500 py-2 text-white rounded-full text-sm w-full"
        >Email Me</button>
        
        @if (session('message'))
          <div>{{ session('message') }}</div>
        @endif  
    </form>
</body>
</html>