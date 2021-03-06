<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mrembo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 24px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Mrembo
        </div>

        <h4>Email Activation for {{ $token->shop->email }}</h4>

        <p>Please activate your account using the following link.</p>
        <p><a href="{{ route('shop.activate.email', $token) }}">Click here to verify</a></p>

        <div class="links">
            <a href="#">Top Brands</a>
            <a href="#">Trending Products</a>
            <a href="#">Featured Products</a>
            <a href="#">Store Locator</a>
            <a href="#">Account</a>
        </div>

        <hr>
        <p>If you did not request an email verification, no further action is required.</p>

        <hr>
        <p>If you having trouble, click on this direct link <a href="{{ route('shop.activate.email', $token) }}">{{ route('shop.activate.email', $token) }}</a> </p>

    </div>
</div>
</body>
</html>
