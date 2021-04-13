<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    @include('header')
    <h1>Add Contact</h1>

    <form method="POST" action="{{ url('add/contact') }}">
        @csrf
        <div class="form-group mb-2">
            <label for="inputPassword2" class="sr-only">Name</label>
            <input type="text" required class="form-control" id="inputPassword2" placeholder="Name"
                   name="name">
        </div>
        @error('name')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror

        <div class="form-group mb-2">
            <label for="inputPassword2" class="sr-only">Contact Number</label>
            <input type="text" required class="form-control" id="inputPassword2" placeholder="Contact Number"
                   name="contact">
            <button type="submit" class="btn btn-primary mb-2 mt-2">Submit</button>
        </div>
        @error('contact')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </form>

</div>
</body>
</html>
