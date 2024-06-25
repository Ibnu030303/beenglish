<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bright Bee Excellent - English Course</title>
    <link rel="shortcut icon" href="{{ asset('img/logo-Transparant.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- MyStyle -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

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
                <div class="btn btn-light"><a href="/daftar">Daftar</a></div>
                <div class="btn btn-light"><a href="/admin">Login</a></div>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <div class="mb-5" id="app">
        <section class="header">
            <div class="container">
                <div class="row">
                    <div class="p-5 text-center">
                        <h2 class="fw-bold mb-4">Biaya</h2>
                        <div class="button-course col-12 mb-4" style="height: 60px">
                            <a v-for="course in courses" :key="course.id" class="btn btn-outline-light m-2"
                                href="#" @click.prevent="selectCourse(course.id)">
                                @{{ course.name }}
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <section class="course-show mt-4" id="app">
            <div class="container">
                <div class="row">
                    <div class="col mb-4">
                        <h2 class="text-start">Courses</h2>
                    </div>
                    <div class="col-12">
                        <table class="table table-bordered table-striped" v-if="programs.length">
                            <thead>
                                <tr>
                                    <th scope="col">Program</th>
                                    <th scope="col">Pendaftaran</th>
                                    <th scope="col">Biaya/bulan</th>
                                    <th scope="col">Student E Book</th>
                                    <th scope="col">Tshirt</th>
                                    <th scope="col">Pertemuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="program in programs" :key="program.id">
                                    <td>@{{ program.name }}</td>
                                    <td>Rp. @{{ number_format(program.details.registration_fee, 2) }}</td>
                                    <td>Rp. @{{ number_format(program.details.monthly_fee, 2) }}</td>
                                    <td>Rp. @{{ number_format(program.details.student_ebook_fee, 2) }}</td>
                                    <td>Rp. @{{ number_format(program.details.tshirt_fee, 2) }}</td>
                                    <td>@{{ program.details.meeting_frequency }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <p v-else>Pilih kursus untuk melihat detail biaya.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/axios@1.7.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

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
                    axios.get(`/biaya/${courseId}/programs`)
                        .then(response => {
                            this.programs = response.data;
                        })
                        .catch(error => {
                            console.error("There was an error fetching the programs!", error);
                        });
                },
                number_format(number, decimals, decPoint = '.', thousandsSep = ',') {
                    number = parseFloat(number);
                    if (!isFinite(number)) {
                        return 0;
                    }
                    const toFixedFix = (n, prec) => {
                        const k = Math.pow(10, prec);
                        return '' + Math.round(n * k) / k;
                    };
                    let s = (decimals ? toFixedFix(number, decimals) : '' + Math.round(number)).split('.');
                    if (s[0].length > 3) {
                        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, thousandsSep);
                    }
                    if ((s[1] || '').length < decimals) {
                        s[1] = s[1] || '';
                        s[1] += new Array(decimals - s[1].length + 1).join('0');
                    }
                    return s.join(decPoint);
                }
            },
            mounted() {
                if (this.courses.length > 0) {
                    this.selectCourse(this.courses[0].id);
                }
            }
        });

        app.mount('#app');
    </script>
</body>

</html>
