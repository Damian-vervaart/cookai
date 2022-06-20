<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
          crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{url('css/app.css')}}">

    <title>COOKAI</title>
</head>
<body>
    <header>
        <div id="header">
            <img src="/img/logo.png" alt="Cookai">
            <a href="#"><strong>contact</strong></a>
            <a href="#"><strong>dealers</strong></a>
            <a href="#"><strong>products</strong></a>
            <a href="{{ route('nothing') }}"><strong>about us</strong></a>
        </div>
    </header>
@yield('content')

<footer>
    <div class="footer">
        <div id="footer-info">
            <h3><strong>Over Cookai</strong></h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Ab aliquam aliquid blanditiis cumque earum eligendi
                est eum excepturi facere incidunt laboriosam laborum non odio,
                perferendis quia, quod sunt tenetur vitae.
            </p>
        </div>
        <div id="footer-info">
            <h3><strong>Products</strong></h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Ab aliquam aliquid blanditiis cumque earum eligendi
                est eum excepturi facere incidunt laboriosam laborum non odio,
                perferendis quia, quod sunt tenetur vitae.
            </p>
        </div>
        <div id="footer-info">
            <h3><strong>Service & Contact</strong></h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Ab aliquam aliquid blanditiis cumque earum eligendi
                est eum excepturi facere incidunt laboriosam laborum non odio,
                perferendis quia, quod sunt tenetur vitae.
            </p>
        </div>

    </div>
    <div id="logo">
        <img src="/img/logo.png" alt="">
    </div>
</footer>
</body>
</html>
