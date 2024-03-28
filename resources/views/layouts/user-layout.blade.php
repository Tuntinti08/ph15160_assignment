<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Laravel</title>
</head>

<body>
    <header style="height: 80px; width: 100%; background-color:aqua; text-align: center;" class="fixed-top">
        <h1 style="color: #fff">Header</h1>
    </header>
    <main style="min-height: 620px; margin-top: 80px" class="container">
        @yield('content')
    </main>
    <footer style="height: 150px; width: 100%; background-color: aqua; text-align: center;">
        <h1 style="color: #fff">Footer</h1>
    </footer>
</body>

</html>
