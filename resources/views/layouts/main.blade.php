<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Font Montserrat --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Indonesia Bercerita</title>

</head>
<body>
    <header>
        @include('partials.navbar');
        <div class="hero">
            <div class="container">
                <div class="box-hero">
                    <div class="box">
                        <h1>Clothing Terbaik dari <br> Indonesia Bercerita</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, in? Eum vel numquam sapiente quas.
                        </p>
                        <button>Selengkapnya</button>
                    </div>
                    <div class="box">
                        <img src="img/hero-bg.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <script src="js/script.js"></script>
</body>
</html>