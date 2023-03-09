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
        <div class="hero" id="home">
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

    <div class="services" id="services">
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
    <div class="card" id="card">
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

    {{-- Shopping Link --}}
    <div class="shop" id="shop">
        <div class="container">
            <div class="box-shop">
                <h1>Tertarik? <br> Ayo Belanja Sekarang!</h1>
                <h3>Klik Link Di Bawah Ini</h3>
                <button><img src="img/wa.png" alt="">Whatsapp</button>
                <button><img src="img/shopee.png" alt="" >Shopee</button>
                <button><img src="img/tokped.png" alt=""> Tokopedia</button>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    <div class="footer" id="footer">
        <div class="container">
            <div class="box-footer">
                <div class="box">
                    <h2>Address</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15849.187921125382!2d108.5534071!3d-6.7335768!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1d8ebc133e3f%3A0x91385801f5822049!2sUNIVERSITAS%20CIC!5e0!3m2!1sen!2sid!4v1678342683928!5m2!1sen!2sid" width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="box">
                <h3>Indonesia Bercerita.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid est dignissimos deleniti qui eum, minus quasi.</p>
                </div>
                <div class="box">
                    <p>&copy; Copyright by <span>Indonesia Bercerita</span> All Rights Reserved 2023.</p>
                </div>
            </div>
            
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>