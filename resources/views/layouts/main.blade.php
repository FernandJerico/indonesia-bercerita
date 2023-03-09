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

    <div class="services">
        <div class="container">
            <div class="box-services">
                <div class="box">
                    <i class="fa-solid fa-shirt"></i>
                    <h4>Bahan Premium</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae, corporis.</p>
                </div>
                <div class="box">
                    <i class="fa-solid fa-mountain-sun"></i>
                    <h4>Desain Nuansa Nusantara</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae, corporis.</p>
                </div>
                <div class="box">
                    <i class="fa-solid fa-wallet"></i>
                    <h4>Harga Bersahabat</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae, corporis.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Cards Section --}}
    <div class="card">
        <div class="container">
            <div class="box-card">
                <div class="box">
                    <img src="img/sawah.jpg" alt="">
                    <h3>Erigo T-shirt</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat recusandae laudantium tenetur facere obcaecati. Obcaecati?</p>
                    <button>Detail</button>
                </div>
                <div class="box">
                    <img src="img/pantai.jpg" alt="">
                    <h3>Eiger T-shirt</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat recusandae laudantium tenetur facere obcaecati. Obcaecati?</p>
                    <button>Detail</button>
                </div>
                <div class="box">
                    <img src="img/pulau.jpg" alt="">
                    <h3>Roughneck T-shirt</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat recusandae laudantium tenetur facere obcaecati. Obcaecati?</p>
                    <button>Detail</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>