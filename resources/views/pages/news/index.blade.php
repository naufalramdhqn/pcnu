<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet"
        />
        <title>PCNU KOTA BATAM</title>
        <style>
            body {
                font-family: "Poppins", sans-serif;
                padding-top: 56px;
                background-color: #fff;
            }

            .background-header {
                height: 900px;
                background: url("/images/HeroBanner.png");
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

            h2:before,
            h2:after {
                background-color: black;
                content: "";
                display: inline-block;
                height: 3px;
                margin-left: 10px;
                margin-right: 10px;
                vertical-align: middle;
                width: 25%;
            }
            .card {
                border: none;
                border-radius: 5px;
            }
            footer {
                background-color: #436850;
                bottom: 0;
                left: 0;
                text-align: center;
            }
            a {
                color: white;
            }
            a:hover {
                color: #33691e;
            }
            .card-footer {
                border: none;
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
                    <img src="{{asset('/images/logo.png')}}" alt="" />
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup
            "
                    aria-controls="navbarNavAltMarkup"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="/">Home</a>
                        <a class="nav-link" href="#">Struktur Organisasi</a>
                        <a class="nav-link active" href="#berita">Berita</a>
                    </div>
                </div>
            </div>
        </nav>
        {{-- EndNavbar --}} {{-- Berita --}}
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="margin-top: 50px">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="fs-4 fw-bold text-center">
                                Berita Terpopuler
                            </h1>
                            <div class="row">
                                <div class="col-md-3">
                                    <div
                                        class="card"
                                        style="
                                            background: url('https://farm9.staticflickr.com/8410/30193245810_7b7ff74cd5.jpg');
                                            height: 245px;
                                        "
                                    >
                                        <div class="card-body"></div>
                                        <div class="card-footer">
                                            <span class="badge text-bg-success"
                                                >Kategori</span
                                            >
                                            <div class="card-text">
                                                <a
                                                    href="#"
                                                    class="card-text mx-auto text-decoration-none"
                                                    >Plantikan Pengurus CPNU</a
                                                >
                                                <p class="card-text text-white">
                                                    {{date('Y-m-d')}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div
                                        class="card"
                                        style="
                                            background: url('https://farm9.staticflickr.com/8410/30193245810_7b7ff74cd5.jpg');
                                            height: 245px;
                                        "
                                    >
                                        <div class="card-body"></div>
                                        <div class="card-footer">
                                            <span class="badge text-bg-success"
                                                >Kategori</span
                                            >
                                            <div class="card-text">
                                                <a
                                                    href="#"
                                                    class="card-text mx-auto text-decoration-none"
                                                    >Plantikan Pengurus CPNU</a
                                                >
                                                <p class="card-text text-white">
                                                    {{date('Y-m-d')}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div
                                        class="card"
                                        style="
                                            background: url('https://farm9.staticflickr.com/8410/30193245810_7b7ff74cd5.jpg');
                                            height: 245px;
                                        "
                                    >
                                        <div class="card-body"></div>
                                        <div class="card-footer">
                                            <span class="badge text-bg-success"
                                                >Kategori</span
                                            >
                                            <div class="card-text">
                                                <a
                                                    href="#"
                                                    class="card-text mx-auto text-decoration-none"
                                                    >Plantikan Pengurus CPNU</a
                                                >
                                                <p class="card-text text-white">
                                                    {{date('Y-m-d')}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div
                                        class="card"
                                        style="
                                            background: url('https://farm9.staticflickr.com/8410/30193245810_7b7ff74cd5.jpg');
                                            height: 245px;
                                        "
                                    >
                                        <div class="card-body"></div>
                                        <div class="card-footer">
                                            <span class="badge text-bg-success"
                                                >Kategori</span
                                            >
                                            <div class="card-text">
                                                <a
                                                    href="#"
                                                    class="card-text mx-auto text-decoration-none"
                                                    >Plantikan Pengurus CPNU</a
                                                >
                                                <p class="card-text text-white">
                                                    {{date('Y-m-d')}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <h1 class="fs-4 fw-bold text-center">
                                        Berita Terbaru
                                    </h1>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div
                                                class="card mb-3"
                                                style="max-width: 540px"
                                            >
                                                <div class="row g-1">
                                                    <div class="col-md-7">
                                                        <div class="card-body">
                                                            <p
                                                                class="card-text fs-6"
                                                            >
                                                                This is a wider
                                                                card with
                                                                supporting text
                                                                below as a
                                                                natural lead-in
                                                                to additional
                                                                content. This
                                                                content is a
                                                                little bit
                                                                longer.
                                                            </p>
                                                            <p
                                                                class="card-text"
                                                            >
                                                                <small
                                                                    class="text-body-secondary"
                                                                    >Last
                                                                    updated 3
                                                                    mins
                                                                    ago</small
                                                                >
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img
                                                            src="https://farm9.staticflickr.com/8410/30193245810_7b7ff74cd5.jpg"
                                                            class="img-fluid rounded-start"
                                                            alt="..."
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div
                                                class="card mb-3"
                                                style="max-width: 540px"
                                            >
                                                <div class="row g-1">
                                                    <div class="col-md-7">
                                                        <div class="card-body">
                                                            <p
                                                                class="card-text fs-6"
                                                            >
                                                                This is a wider
                                                                card with
                                                                supporting text
                                                                below as a
                                                                natural lead-in
                                                                to additional
                                                                content. This
                                                                content is a
                                                                little bit
                                                                longer.
                                                            </p>
                                                            <p
                                                                class="card-text"
                                                            >
                                                                <small
                                                                    class="text-body-secondary"
                                                                    >Last
                                                                    updated 3
                                                                    mins
                                                                    ago</small
                                                                >
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img
                                                            src="https://farm9.staticflickr.com/8410/30193245810_7b7ff74cd5.jpg"
                                                            class="img-fluid rounded-start"
                                                            alt="..."
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div
                                                class="card mb-3"
                                                style="max-width: 540px"
                                            >
                                                <div class="row g-1">
                                                    <div class="col-md-7">
                                                        <div class="card-body">
                                                            <p
                                                                class="card-text fs-6"
                                                            >
                                                                This is a wider
                                                                card with
                                                                supporting text
                                                                below as a
                                                                natural lead-in
                                                                to additional
                                                                content. This
                                                                content is a
                                                                little bit
                                                                longer.
                                                            </p>
                                                            <p
                                                                class="card-text"
                                                            >
                                                                <small
                                                                    class="text-body-secondary"
                                                                    >Last
                                                                    updated 3
                                                                    mins
                                                                    ago</small
                                                                >
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img
                                                            src="https://farm9.staticflickr.com/8410/30193245810_7b7ff74cd5.jpg"
                                                            class="img-fluid rounded-start"
                                                            alt="..."
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div
                                                class="card mb-3"
                                                style="max-width: 540px"
                                            >
                                                <div class="row g-1">
                                                    <div class="col-md-7">
                                                        <div class="card-body">
                                                            <p
                                                                class="card-text fs-6"
                                                            >
                                                                This is a wider
                                                                card with
                                                                supporting text
                                                                below as a
                                                                natural lead-in
                                                                to additional
                                                                content. This
                                                                content is a
                                                                little bit
                                                                longer.
                                                            </p>
                                                            <p
                                                                class="card-text"
                                                            >
                                                                <small
                                                                    class="text-body-secondary"
                                                                    >Last
                                                                    updated 3
                                                                    mins
                                                                    ago</small
                                                                >
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img
                                                            src="https://farm9.staticflickr.com/8410/30193245810_7b7ff74cd5.jpg"
                                                            class="img-fluid rounded-start"
                                                            alt="..."
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div
                                                class="card mb-3"
                                                style="max-width: 540px"
                                            >
                                                <div class="row g-1">
                                                    <div class="col-md-7">
                                                        <div class="card-body">
                                                            <p
                                                                class="card-text fs-6"
                                                            >
                                                                This is a wider
                                                                card with
                                                                supporting text
                                                                below as a
                                                                natural lead-in
                                                                to additional
                                                                content. This
                                                                content is a
                                                                little bit
                                                                longer.
                                                            </p>
                                                            <p
                                                                class="card-text"
                                                            >
                                                                <small
                                                                    class="text-body-secondary"
                                                                    >Last
                                                                    updated 3
                                                                    mins
                                                                    ago</small
                                                                >
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img
                                                            src="https://farm9.staticflickr.com/8410/30193245810_7b7ff74cd5.jpg"
                                                            class="img-fluid rounded-start"
                                                            alt="..."
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div
                                                class="card mb-3"
                                                style="max-width: 540px"
                                            >
                                                <div class="row g-1">
                                                    <div class="col-md-7">
                                                        <div class="card-body">
                                                            <p
                                                                class="card-text fs-6"
                                                            >
                                                                This is a wider
                                                                card with
                                                                supporting text
                                                                below as a
                                                                natural lead-in
                                                                to additional
                                                                content. This
                                                                content is a
                                                                little bit
                                                                longer.
                                                            </p>
                                                            <p
                                                                class="card-text"
                                                            >
                                                                <small
                                                                    class="text-body-secondary"
                                                                    >Last
                                                                    updated 3
                                                                    mins
                                                                    ago</small
                                                                >
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img
                                                            src="https://farm9.staticflickr.com/8410/30193245810_7b7ff74cd5.jpg"
                                                            class="img-fluid rounded-start"
                                                            alt="..."
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div
                                                class="card mb-3"
                                                style="max-width: 540px"
                                            >
                                                <div class="row g-1">
                                                    <div class="col-md-7">
                                                        <div class="card-body">
                                                            <p
                                                                class="card-text fs-6"
                                                            >
                                                                This is a wider
                                                                card with
                                                                supporting text
                                                                below as a
                                                                natural lead-in
                                                                to additional
                                                                content. This
                                                                content is a
                                                                little bit
                                                                longer.
                                                            </p>
                                                            <p
                                                                class="card-text"
                                                            >
                                                                <small
                                                                    class="text-body-secondary"
                                                                    >Last
                                                                    updated 3
                                                                    mins
                                                                    ago</small
                                                                >
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img
                                                            src="https://farm9.staticflickr.com/8410/30193245810_7b7ff74cd5.jpg"
                                                            class="img-fluid rounded-start"
                                                            alt="..."
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div
                                                class="card mb-3"
                                                style="max-width: 540px"
                                            >
                                                <div class="row g-1">
                                                    <div class="col-md-7">
                                                        <div class="card-body">
                                                            <p
                                                                class="card-text fs-6"
                                                            >
                                                                This is a wider
                                                                card with
                                                                supporting text
                                                                below as a
                                                                natural lead-in
                                                                to additional
                                                                content. This
                                                                content is a
                                                                little bit
                                                                longer.
                                                            </p>
                                                            <p
                                                                class="card-text"
                                                            >
                                                                <small
                                                                    class="text-body-secondary"
                                                                    >Last
                                                                    updated 3
                                                                    mins
                                                                    ago</small
                                                                >
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img
                                                            src="https://farm9.staticflickr.com/8410/30193245810_7b7ff74cd5.jpg"
                                                            class="img-fluid rounded-start"
                                                            alt="..."
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <nav aria-label="Page navigation example">
                                        <ul
                                            class="pagination justify-content-center"
                                        >
                                            <li class="page-item">
                                                <a
                                                    class="page-link"
                                                    href="#"
                                                    aria-label="Previous"
                                                >
                                                    <span aria-hidden="true"
                                                        >&laquo;</span
                                                    >
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"
                                                    >1</a
                                                >
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"
                                                    >2</a
                                                >
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"
                                                    >3</a
                                                >
                                            </li>
                                            <li class="page-item">
                                                <a
                                                    class="page-link"
                                                    href="#"
                                                    aria-label="Next"
                                                >
                                                    <span aria-hidden="true"
                                                        >&raquo;</span
                                                    >
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="col">
                                    <h1 class="fs-6 fw-bold text-center">
                                        Kategori
                                    </h1>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="list-group">
                                                <li
                                                    class="list-group-item active"
                                                    aria-current="true"
                                                >
                                                    An active item
                                                </li>
                                                <li class="list-group-item">
                                                    A second item
                                                </li>
                                                <li class="list-group-item">
                                                    A third item
                                                </li>
                                                <li class="list-group-item">
                                                    A fourth item
                                                </li>
                                                <li class="list-group-item">
                                                    And a fifth one
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- EndBerita --}} {{-- Footer --}}
        <footer class="container-fluid mt-4" style="padding: 10px">
            <div class="text-center">
                <p class="text-white">
                    <img
                        src="{{asset('/images/logo.png')}}"
                        class="navbar-brand"
                        alt=""
                    />
                    Copyright &copy; {{date('Y')}} PCNU Kota Batam
                </p>
            </div>
        </footer>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
