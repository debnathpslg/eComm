<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        <title>eComm Project</title>
    </head>
    <body>
        {{ View::make('header') }}
        @yield('container')
        {{ View::make('footer') }}
    </body>
    <style>
        .custom-login {
            height: 500px;
            padding-top: 100px;
        }

        .custom-product {
            height: 600px;
        }

        img.slider-img {
            height: 400px !important;
        }

        .slider-text {
            background-color: #35443585 !important; 
        }

        .trending-image {
            height: 100px;
        }

        .trending-item {
            float: left;
            width: 20%;
            align-items: center;
            text-align: center;
        }

        .trending-wrapper {
            margin: 30px;
        }

        .detail-img {
            height: 200px;
        }
    </style>
</html>