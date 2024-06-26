<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bright Bee Ecelent - English Course</title>
    <!-- logo favicons -->
    <link rel="shortcut icon" href="{{ asset('img/logo-Transparant.png') }}" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- MyStyle -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="{{asset('img/logo-Transparant.png')}}" alt="Logo" width="40" height="35"
                    class="d-inline-block align-text-top me-3" />
                BEE Makes You Talk
            </a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/courses">Course</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/biaya">Biaya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profiles">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Galery</a>
                    </li>
                </ul>
                <div class="btn btn-light me-4"><a href="/daftar">Daftar</a></div>
                <div class="btn btn-light"><a href="/admin">Login</a></div>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- HERO -->
    <section class="hero d-flex justify-content-center align-items-center flex-column text-center" style="height: 70vh">
        <div class="container-fluid">
            <div class="row border ">
                <div class="col">
                    <h1 class="mb-4">BRIGHT EXECELENT ENGLISH</h1>
                    <h3 class="mb-4">
                        Transform Your English Language Skills with BEE Balaraja!
                    </h3>
                    <p class="fs-6">
                        Solusi Untuk Belajar Melatih Bahasa Inggrismu Lebih Lancar dan
                        Percaya Diri
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- END HERO -->

    <!-- COURSE -->
    <section class="course mt-4 mb-4" id="app">
        <div class="container-fluid">
            <div class="row">
                <div class="col mb-4">
                    <h2 class="text-center">Courses</h2>
                </div>
                <div class="button-course col-12 mb-4" style="height: 60px">
                    @foreach ($courses as $course)
                        <a class="btn btn-outline-primary m-2" href="#" style="cursor: pointer"
                            @click.prevent="selectCourse({{ $course->id }})">
                            {{ $course->name }}
                        </a>
                    @endforeach
                </div>
                <div class="col">
                    <div class="row d-flex flex-wrap g-5">
                        <div class="col-md-4" v-for="program in programs.slice(0, 3)" :key="program.id">
                            <div class="card shadow h-100">
                                <img :src="'/storage/' + program.image" class="card-img-top" alt="Program Image">
                                <div class="card-body">
                                    <h5 class="card-title mb-4 mt-2">@{{ program.name }}</h5>
                                    <p class="card-text">@{{ truncate(program.description, 20) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <a href="/courses" class="btn btn-outline-primary">View All Course</a>
                </div>
            </div>
        </div>
    </section>
    <!-- END COURSE -->

    <!-- ABOUT -->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="">Mengapa Bright Excelent English ?</h2>
                </div>
                <div class="col">
                    <img src="img/pngtree-cartoon-happy-children-in-graduation-costumes-png-image_62-removebg-preview.png"
                        alt="" width="450" height="400" />
                </div>
                <div class="col  d-flex justify-content-center align-items-center flex-column">
                    <h3 class="mb-4 fs-bold">Bright Excellent English</h3>
                    <p>
                        BEE adalah lembaga pendidikan bahasa Inggris yang menyediakan
                        pengalaman pembelajaran berkualitas tinggi dengan pendekatan
                        inovatif dan interaktif. Kami membantu siswa meraih kemahiran
                        berbahasa Inggris yang tinggi dan meningkatkan kepercayaan diri
                        mereka dalam berkomunikasi secara efektif.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT -->

    <!-- INFO -->
    <section class="info">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="mb-4">Ayo Buruan Daftar Sekarang !!</h2>
                    <h5>Dapatkan Promo Menariknya Setiap Liburan Semester</h5>
                </div>
                <div class="col text-center mt-2">
                    <a href="0" class="btn btn-primary me-3 p-2">Daftar Sekarang</a>
                    <a href="0" class="btn btn-primary ms-3 p-2">WhatsApp</a>
                </div>
            </div>
        </div>
    </section>
    <!-- END INFO -->

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center p-3">
                    <h2>Ikuti Kami</h2>
                    <div class="sosmed d-flex justify-content-center gap-4">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50"
                                viewBox="0 0 48 48">
                                <linearGradient id="awSgIinfw5_FS5MLHI~A9a_yGcWL8copNNQ_gr1" x1="6.228"
                                    x2="42.077" y1="4.896" y2="43.432" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#0d61a9"></stop>
                                    <stop offset="1" stop-color="#16528c"></stop>
                                </linearGradient>
                                <path fill="url(#awSgIinfw5_FS5MLHI~A9a_yGcWL8copNNQ_gr1)"
                                    d="M42,40c0,1.105-0.895,2-2,2H8c-1.105,0-2-0.895-2-2V8c0-1.105,0.895-2,2-2h32	c1.105,0,2,0.895,2,2V40z">
                                </path>
                                <path
                                    d="M25,38V27h-4v-6h4v-2.138c0-5.042,2.666-7.818,7.505-7.818c1.995,0,3.077,0.14,3.598,0.208	l0.858,0.111L37,12.224L37,17h-3.635C32.237,17,32,18.378,32,19.535V21h4.723l-0.928,6H32v11H25z"
                                    opacity=".05"></path>
                                <path
                                    d="M25.5,37.5v-11h-4v-5h4v-2.638c0-4.788,2.422-7.318,7.005-7.318c1.971,0,3.03,0.138,3.54,0.204	l0.436,0.057l0.02,0.442V16.5h-3.135c-1.623,0-1.865,1.901-1.865,3.035V21.5h4.64l-0.773,5H31.5v11H25.5z"
                                    opacity=".07"></path>
                                <path fill="#fff"
                                    d="M33.365,16H36v-3.754c-0.492-0.064-1.531-0.203-3.495-0.203c-4.101,0-6.505,2.08-6.505,6.819V22h-4v4	h4v11h5V26h3.938l0.618-4H31v-2.465C31,17.661,31.612,16,33.365,16z">
                                </path>
                            </svg>
                        </a>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50"
                                viewBox="0 0 48 48">
                                <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38"
                                    cy="42.035" r="44.899" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fd5"></stop>
                                    <stop offset=".328" stop-color="#ff543f"></stop>
                                    <stop offset=".348" stop-color="#fc5245"></stop>
                                    <stop offset=".504" stop-color="#e64771"></stop>
                                    <stop offset=".643" stop-color="#d53e91"></stop>
                                    <stop offset=".761" stop-color="#cc39a4"></stop>
                                    <stop offset=".841" stop-color="#c837ab"></stop>
                                </radialGradient>
                                <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)"
                                    d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                                </path>
                                <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786"
                                    cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#4168c9"></stop>
                                    <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                                </radialGradient>
                                <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)"
                                    d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                                </path>
                                <path fill="#fff"
                                    d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z">
                                </path>
                                <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                                <path fill="#fff"
                                    d="M20,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z">
                                </path>
                            </svg>
                        </a>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50"
                                viewBox="0 0 48 48">
                                <path fill="#FF3D00"
                                    d="M43.2,33.9c-0.4,2.1-2.1,3.7-4.2,4c-3.3,0.5-8.8,1.1-15,1.1c-6.1,0-11.6-0.6-15-1.1c-2.1-0.3-3.8-1.9-4.2-4C4.4,31.6,4,28.2,4,24c0-4.2,0.4-7.6,0.8-9.9c0.4-2.1,2.1-3.7,4.2-4C12.3,9.6,17.8,9,24,9c6.2,0,11.6,0.6,15,1.1c2.1,0.3,3.8,1.9,4.2,4c0.4,2.3,0.9,5.7,0.9,9.9C44,28.2,43.6,31.6,43.2,33.9z">
                                </path>
                                <path fill="#FFF" d="M20 31L20 17 32 24z"></path>
                            </svg>
                        </a>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50"
                                viewBox="0 0 48 48">
                                <path fill="#fff"
                                    d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z">
                                </path>
                                <path fill="#fff"
                                    d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z">
                                </path>
                                <path fill="#cfd8dc"
                                    d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z">
                                </path>
                                <path fill="#40c351"
                                    d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z">
                                </path>
                                <path fill="#fff" fill-rule="evenodd"
                                    d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <hr>
                <p class="text-center">Powered By Ibnu & Giffari &copy; 2024</p>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <!-- CONTACK -->
    <div class="contack fixed-bottom text-end me-4 mb-4">
        <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="55" height="55"
                viewBox="0 0 64 64">
                <radialGradient id="AhngXQ8Zf2VLA52L6fLwQa_OlCQeBlsSdb9_gr1" cx="32.5" cy="32.5" r="30.516"
                    gradientUnits="userSpaceOnUse">
                    <stop offset="0" stop-color="#eed7a2"></stop>
                    <stop offset=".106" stop-color="#f1dcab"></stop>
                    <stop offset=".437" stop-color="#f8e8c3"></stop>
                    <stop offset=".744" stop-color="#fcefd2"></stop>
                    <stop offset="1" stop-color="#fef2d7"></stop>
                </radialGradient>
                <path fill="url(#AhngXQ8Zf2VLA52L6fLwQa_OlCQeBlsSdb9_gr1)"
                    d="M59,21h1.5c2.168,0,3.892-1.998,3.422-4.243C63.58,15.122,62.056,14,60.385,14L53,14 c-1.105,0-2-0.895-2-2c0-1.105,0.895-2,2-2h3.385c1.67,0,3.195-1.122,3.537-2.757C60.392,4.998,58.668,3,56.5,3H34.006H32.5h-24 C6.575,3,5,4.575,5,6.5S6.575,10,8.5,10H10c1.105,0,2,0.895,2,2c0,1.105-0.895,2-2,2l-5.385,0c-1.67,0-3.195,1.122-3.537,2.757 C0.608,19.002,2.332,21,4.5,21H18v12L4.615,33c-1.67,0-3.195,1.122-3.537,2.757C0.608,38.002,2.332,40,4.5,40H5 c1.105,0,2,0.895,2,2c0,1.105-0.895,2-2,2H4.5c-2.168,0-3.892,1.998-3.422,4.243C1.42,49.878,2.945,51,4.615,51H10 c1.105,0,2,0.895,2,2c0,1.105-0.895,2-2,2l-1.385,0c-1.67,0-3.195,1.122-3.537,2.757C4.608,60.002,6.332,62,8.5,62h22.494H32.5h23 c1.925,0,3.5-1.575,3.5-3.5S57.425,55,55.5,55H55c-1.105,0-2-0.895-2-2c0-1.105,0.895-2,2-2h4.385c1.67,0,3.195-1.122,3.537-2.757 C63.392,45.998,61.668,44,59.5,44H47V32h12.385c1.67,0,3.195-1.122,3.537-2.757C63.392,26.998,61.668,25,59.5,25H59 c-1.105,0-2-0.895-2-2C57,21.895,57.895,21,59,21z">
                </path>
                <path fill="#fff"
                    d="M29.947,7.082C17.733,8.057,7.89,18.032,7.059,30.256c-0.309,4.552,0.603,8.865,2.44,12.647 L6.134,55.69c-0.507,1.926,1.25,3.683,3.176,3.176l13.598-3.579c3.66,1.43,7.733,2.034,11.999,1.546 c11.801-1.349,21.144-11.084,22.021-22.93C58.067,18.55,45.318,5.855,29.947,7.082z">
                </path>
                <linearGradient id="AhngXQ8Zf2VLA52L6fLwQb_OlCQeBlsSdb9_gr2" x1="32.001" x2="32.001"
                    y1="11" y2="53.984" gradientUnits="userSpaceOnUse">
                    <stop offset="0" stop-color="#00d772"></stop>
                    <stop offset=".996" stop-color="#00b26e"></stop>
                    <stop offset="1" stop-color="#00b26e"></stop>
                </linearGradient>
                <path fill="url(#AhngXQ8Zf2VLA52L6fLwQb_OlCQeBlsSdb9_gr2)"
                    d="M13.556,43.205c0.122-0.462,0.074-0.952-0.135-1.382l-0.323-0.666 c-1.59-3.274-2.298-6.95-2.047-10.629c0.698-10.274,8.959-18.64,19.215-19.458C30.843,11.023,31.426,11,32,11 c5.817,0,11.428,2.447,15.391,6.715c4.018,4.326,5.988,9.97,5.55,15.894c-0.73,9.854-8.678,18.129-18.486,19.251 C33.638,52.953,32.812,53,32,53l0,0c-2.624,0-5.192-0.484-7.635-1.438l-0.607-0.237c-0.394-0.154-0.827-0.179-1.237-0.071 l-10.25,2.697c-0.741,0.195-1.416-0.481-1.222-1.222L13.556,43.205z">
                </path>
                <path fill="#fff" fill-rule="evenodd"
                    d="M25.611,21.115c-0.479-1.06-0.983-1.082-1.44-1.101 C23.798,19.999,23.372,20,22.946,20c-0.426,0-1.119,0.16-1.706,0.797S19,22.974,19,26.107s2.292,6.16,2.612,6.584 c0.32,0.424,4.426,7.058,10.928,9.611c5.403,2.121,6.503,1.699,7.677,1.593c1.173-0.106,3.785-1.539,4.318-3.026 s0.533-2.761,0.374-3.026c-0.16-0.266-0.587-0.424-1.226-0.744c-0.295-0.147-1.928-0.949-3.717-1.813 c-0.826-0.399-1.818-0.186-2.405,0.519c-0.242,0.29-0.708,0.848-1.229,1.469c-0.592,0.706-1.587,0.917-2.415,0.513 c-1.27-0.62-3.141-1.649-4.601-2.945c-1.046-0.928-2.253-2.566-3.04-3.711c-0.529-0.77-0.462-1.8,0.169-2.489 c0.279-0.305,0.561-0.613,0.765-0.851c0.487-0.569,0.617-1.36,0.334-2.054C26.964,24.321,25.998,21.971,25.611,21.115z"
                    clip-rule="evenodd"></path>
                <linearGradient id="AhngXQ8Zf2VLA52L6fLwQc_OlCQeBlsSdb9_gr3" x1="43.455" x2="43.455"
                    y1="11.14" y2="39.238" gradientUnits="userSpaceOnUse">
                    <stop offset="0" stop-color="#00e67a"></stop>
                    <stop offset=".996" stop-color="#00c177"></stop>
                    <stop offset="1" stop-color="#00c177"></stop>
                </linearGradient>
                <path fill="url(#AhngXQ8Zf2VLA52L6fLwQc_OlCQeBlsSdb9_gr3)"
                    d="M52.91,30H44c-1.11,0-2-0.89-2-2.01v-0.05c0-1.07,0.87-1.94,1.94-1.94h0.56 c0.83,0,1.5-0.67,1.5-1.5S45.33,23,44.5,23h-8c-0.69,0-1.32-0.28-1.77-0.73C34.28,21.82,34,21.19,34,20.5c0-1.38,1.12-2.5,2.5-2.5 h1c0.83,0,1.5-0.67,1.5-1.5S38.33,15,37.5,15h-1c-0.69,0-1.32-0.28-1.77-0.73C34.28,13.82,34,13.19,34,12.5 c0-0.5,0.15-0.97,0.4-1.36c4.94,0.57,9.58,2.9,12.99,6.57C50.58,21.15,52.48,25.42,52.91,30z">
                </path>
                <linearGradient id="AhngXQ8Zf2VLA52L6fLwQd_OlCQeBlsSdb9_gr4" x1="8.646" x2="41.95"
                    y1="42.071" y2="54.192" gradientUnits="userSpaceOnUse">
                    <stop offset="0" stop-color="#00c267"></stop>
                    <stop offset=".996" stop-color="#009d61"></stop>
                    <stop offset="1" stop-color="#009d61"></stop>
                </linearGradient>
                <path fill="url(#AhngXQ8Zf2VLA52L6fLwQd_OlCQeBlsSdb9_gr4)"
                    d="M29.998,50.402c0.038,1.011-0.521,1.894-1.358,2.328c-1.46-0.23-2.88-0.63-4.27-1.17 l-0.61-0.24c-0.4-0.15-0.83-0.17-1.24-0.07l-10.251,2.703c-0.741,0.195-1.417-0.481-1.222-1.222L13.56,43.2 c0.12-0.46,0.07-0.95-0.14-1.38l-0.32-0.66c-0.94-1.94-1.57-4.02-1.88-6.16h7.28c0.83,0,1.5,0.67,1.5,1.5S19.33,38,18.5,38 S17,38.67,17,39.5s0.67,1.5,1.5,1.5H23c1.206,0,2.163,1.062,1.972,2.316C24.821,44.308,23.893,45,22.89,45l-1.39,0 c-0.83,0-1.5,0.67-1.5,1.5c0,0.83,0.67,1.5,1.5,1.5h5.857C28.725,48,29.946,49.035,29.998,50.402z">
                </path>
            </svg>
        </a>
    </div>
    <!-- END CONTACK -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/axios@1.7.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- Bootrstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
        const app = Vue.createApp({
            data() {
                return {
                    courses: @json($courses),
                    programs: [],
                    selectedCourse: null
                };
            },
            methods: {
                selectCourse(courseId) {
                    this.selectedCourse = courseId;
                    this.fetchPrograms(courseId);
                },
                fetchPrograms(courseId) {
                    axios.get(`/courses/${courseId}/programs`)
                        .then(response => {
                            this.programs = response.data;
                        })
                        .catch(error => {
                            console.error("There was an error fetching the programs!", error);
                        });
                },
                truncate(text, wordLimit) {
                    if (typeof text !== 'string') {
                        return '';
                    }
                    const words = text.split(' ');
                    if (words.length > wordLimit) {
                        return words.slice(0, wordLimit).join(' ') + '...';
                    }
                    return text;
                }
            },
            mounted() {
                if (this.courses.length > 0) {
                    this.selectCourse(this.courses[0].id);
                }
            }
        });

        app.mount('#app');

        // Add this JavaScript for the navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>
