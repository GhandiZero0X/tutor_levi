<!doctype html>
<html lang="en">

<head>
    <meta property="og:image" itemprop="image" content="images/logoTitle/logoweb.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:wight" content="200">
    <meta property="og:image:height" content="200">
    <title>{{ $title }}</title>
    <link rel="icon" type="image/png" href="images/logoTitle/logoweb.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    @yield('login')

    @yield('registrasi')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <script src="js/script.js"></script>
</body>

</html>
