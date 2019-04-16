<html>
<head>
    <title>Login | Zero</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
    <link rel="icon" href="image/ZeroLogo2.png">
    <link>
</head>
<body style="height: 100%;padding: 0px;margin: 0px;">
<header>
    <div class="navbar navbar-expand-md navbar-light">
        <ul class="navbar nav mr-auto mt-0">
            <li class="nav-item m-0"><a class="nav-link" href="{{url('')}}">< Back</a></li>
        </ul>
    </div>
</header>
<main role="main">
    <div class="container p-0 login-container shadow-lg">
        <section class="text-center mt-5" style="border-radius: 1em;background-color: #1b4b72">
            <img src="image/ZeroLogo2.png" class="mt-3" width="128px">
            <div class="display-4">MyZero</div>
            <div class="mt-lg-5">
                <input class="form-control input-boxes" placeholder="Email Address">
                <input class="form-control input-boxes" type="password" placeholder="Password">
                <button class="btn btn-primary bg-dark mb-lg-2" type="submit">LOG IN</button>
            </div>
        </section>
    </div>
</main>
</body>
</html>