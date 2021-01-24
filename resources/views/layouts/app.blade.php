<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/12bool.css">
</head>

<body>

    @include('common.header')

    @section('main')
    @show

    @include('common.footer')

</body>

</html>
