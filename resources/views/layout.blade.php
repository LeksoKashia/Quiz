<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auth with Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    @guest

    <center>
        <h3>Authorise for more features</h3>
        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
        <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
    </center>
        


    @endguest
    
    <div class="container mt-5">
        @yield('body')
    </div>
</body>

<style>

    img{
        height: 250px;
    }

    body{
        color:aliceblue;
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(94,94,177,1) 35%, rgba(0,212,255,1) 100%);

    }
</style>

</html>