<html lang="en">
<head>
    <title>Laravel Multiple File Upload Example</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h3 class="jumbotron">Laravel Multiple File Upload</h3>
    <form method="post" action="store" enctype="multipart/form-data">
        <label for="name">name</label>
        <input type="text" name="name"><br>
        <label for="image">image</label>
        <input type="file" name="image">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <input type="submit" class="btn btn-primary" style="margin-top:10px">Submit</input>

    </form>
</div>

</body>
</html>