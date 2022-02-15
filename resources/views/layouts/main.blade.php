<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is the home page of Alessandro Ryo showcase website">
    <title>Alessandro Ryo</title>
    <link rel="icon" href="/img/hz-icon.png">
    <link rel="stylesheet" href="/css/style.css?{{ time() }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Poppins:wght@400;700&family=Roboto:wght@500&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://kit.fontawesome.com/42c532e274.js"></script>
</head>
<body>
    @include('partials.navbar')

    @yield('main-content')

    @include('partials.footer')
    <script src="js/script.js"></script>
</body>
</html>
