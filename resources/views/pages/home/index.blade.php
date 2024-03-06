<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>PCNU KOTA BATAM</title>
    <style>
        body{
            font-family: 'Poppins', sans-serif;
            padding-top: 56px;
            background-color: #fff;
        }
        
            
        
      .background-header {
    height: 900px;
    background: url('/images/HeroBanner.png');
    padding-top: 56px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}

.background-header .mask {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.background-header .text-white {

    z-index: 1;
}

        .navbar {
            background-color: #436850;
            height: 80px;
        }
       
        .nav-link {
            font-weight: 600;
            color: white;
            margin-right: 50px;
        }
        .nav-link:hover {
            color: black;
            transform: scale3d(1.1, 1.1, 1.1);
        }
        
        h2:before ,
        h2:after 
            {
                background-color: black;
                content: "";
                display: inline-block;
                height: 3px;
                margin-left: 10px;
                margin-right: 10px;
                vertical-align: middle;
                width: 25%;
            }
            .card{
                border: none;
                border-radius: 5px;
            }
            footer{
                background-color: #436850;
                
                bottom: 0;
                left: 0;
                text-align: center;
            }
            a{
                color: white;
            }
            a:hover{
                color: #33691E;
            }
            .card-footer {
                border:none;
            }
            .medsos p span i {
                padding: 10px;
                
            }
            .social-buttons {
  padding: 1.5rem;
  padding-top: 0.6rem;
  padding-left: 0.9rem;
                
            }
            .social-buttons button {
                border: none;
                cursor: pointer;
                background-color: transparent;
            }
            .social-buttons button:focus {
                outline: 0;
            }
            .social-buttons button:hover i {

  transform: scale(1.5);
}

    </style>

</head>
  <body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('/images/logo.png')}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#offcanvasDarkNavbar
            " aria-controls="offcanvasDarkNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="offcanvasDarkNavbar">
                <div class="navbar-nav ">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link " href="#">Struktur Organisasi</a>
                    <a class="nav-link" href="#berita">Berita</a>
                </div>
            </div>
        </div>
    </nav>
    {{-- EndNavbar --}}
    
    {{-- Header --}}
    {{-- Header --}}
    <div class="text-center background-header" style="margin-top: 20px;">
    <div class="mask d-flex justify-content-center align-items-center">
        <div class="text-white text-center">
            <h1 class="display-6 fw-bold">PCNU Kota Batam</h1>
            <a class="btn btn-outline-success btn-lg" href="#kontak" role="button">Kontak Kami</a>
        </div>
    </div>
    </div>
    {{-- EndHeader --}}

    {{-- EndHeader --}}

    {{-- Berita --}}
    <section class="container mt-4" id="berita">
        <div class="col-12">
            <h2 class="display-6 mb-5 text-center">Berita Terkini </h2>
        </div>
<div class="row p-1 ">
    <div class="col-md-4">
        <div class="card  mb-4" style="background: url('https://farm9.staticflickr.com/8410/30193245810_7b7ff74cd5.jpg'); height: 505px;">
            <div class="card-body">
            </div>
            <div class="card-footer">
                <span class="badge text-bg-success">Kategori</span>
                <div class="card-text">
                    <a href="#" class="card-text mx-auto text-decoration-none">Plantikan Pengurus CPNU</a>
                    <p class="card-text text-white">{{date('Y-m-d')}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4" style="background: url('https://farm9.staticflickr.com/8410/30193245810_7b7ff74cd5.jpg'); height: 505px;">
 <div class="card-body">
            </div>
            <div class="card-footer">
                <span class="badge text-bg-success">Kategori</span>
                <div class="card-text">
                    <a href="#" class="card-text mx-auto text-decoration-none">Plantikan Pengurus CPNU</a>
                    <p class="card-text text-warning fw-bold">{{date('Y-m-d')}}</p>
                </div>
            </div> 
        </div>
    </div>
    <div class="col-md-4 ">
        <div class="row">
            <div class="col-md-12">
                 <div class="card" style="background: url('https://farm9.staticflickr.com/8410/30193245810_7b7ff74cd5.jpg'); height: 245px;">
        <div class="card-body">
            </div>
            <div class="card-footer">
                <span class="badge text-bg-success">Kategori</span>
                <div class="card-text">
                    <a href="#" class="card-text mx-auto text-decoration-none">Plantikan Pengurus CPNU</a>
                    <p class="card-text text-white"><i class="bi bi-calendar3"></i> {{date('m-d-Y')}}</p>
                </div>
            </div>
        </div>
            </div>
            <div class="col-md-12" >
                 <div class="card w-auto mt-3" style="background: url('https://farm9.staticflickr.com/8410/30193245810_7b7ff74cd5.jpg'); height: 245px; ">
             <div class="card-body">
            </div>
            <div class="card-footer">
                <span class="badge text-bg-success">Kategori</span>
                <div class="card-text">
                    <a href="#" class="card-text mx-auto text-decoration-none">Plantikan Pengurus CPNU</a>
                    <p class="card-text text-white">{{date('Y-m-d')}}</p>
                </div>
            </div>
            </div>
        </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-auto mx-auto mt-5">
            <a href="/berita" class="btn btn-outline-success">Lihat Berita Lainnya <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
</div>
    </section>
    {{-- EndBerita --}}
    
    {{-- Kontak --}}
    <section class="container mt-5" id="kontak">
        <div class="col-12">
            <h2 class="display-6 mb-5 text-center">Kontak Kami </h2>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                            <div class="col">
    <ul>
        <li>Alamat Redaksi : <span>Komplek NU Center, Jalan Abuyaltama No.01 Belian
Kec. Batam Kota , Kota Batam, Kepulauan Riau</span> </li>
        <li>Telepon : <span>081372400043</span></li>
    </ul>
    <div class="align-self-end">
        <p class="fw-bold fs-3">Media Sosial</p>
        <div class="social-buttons">
            <button> <i class="fa-brands fa-facebook fa-xl" style="color: #0500FF;"></i></button>
            <button><i class="fa-brands fa-twitter fa-xl" style="color: #1D9BF0;"></i></button>
            <button><i class="fa-brands fa-telegram fa-xl" style="color: #1D9BF0;"></i></button>
            <button><i class="fa-brands fa-whatsapp fa-xl" style="color: #0AC507;"></i></button>
        </div>
    </div>
</div>
                            <div class="col">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.068105451998!2d104.0799982758933!3d1.1111193622947746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d989744afde9d5%3A0x233d79c042d15a9f!2sMasjid%20An-Nahdlah%20NU%20Center%20Kepri!5e0!3m2!1sid!2sid!4v1709365426433!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- EndKontak --}}
    {{-- Daftar --}}
    <section class="container mt-5">
        <div class="col-12">
            <h2 class="display-6 mb-2 text-center">Daftar</h2>
        </div>
        <a href="#" class=" text-primary">Daftar</a>
    </section>
    {{-- EndDaftar --}}

    {{-- Footer --}}
    <footer class="container-fluid" style="padding:10px">
        <div class="text-center">
            <p class="text-white"> <img src="{{asset('/images/logo.png')}}" class="navbar-brand" alt=""> Copyright &copy; {{date('Y')}} PCNU Kota Batam</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>