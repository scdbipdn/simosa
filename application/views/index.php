<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sistem Informasi & Monitoring Beasiswa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url() ?>assets_style/assets_depan/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url() ?>assets_style/assets_depan/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets_style/assets_depan/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets_style/assets_depan/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url() ?>assets_style/assets_depan/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url() ?>assets_style/assets_depan/css/style.css" rel="stylesheet">

    <style>
        @media screen and (min-width: 450px) {
            #pagination {
                display: block;
                margin-left: 100%;
            }
        }

        /*untuk layar device berukuran sedang*/
        @media screen and (min-width: 550px) {
            #pagination {
                display: block;
                margin-left: 100%;
            }
        }

        /*untuk layar device berukuran besar*/
        @media screen and (min-width: 800px) {
            #pagination {
                display: block;
                margin-left: 35%;
            }
        }
    </style>

</head>


<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <img src="<?= base_url() ?>assets_style/assets_depan/img/logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Beranda</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Informasi Beasiswa</a>
                            <div class="dropdown-menu m-0">
                                <a href="team.html" class="dropdown-item">Dalam Negeri</a>
                                <a href="testimonial.html" class="dropdown-item">Luar Negeri</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Perispan Beasiswa</a>
                            <div class="dropdown-menu m-0">
                                <a href="team.html" class="dropdown-item">Data Pendaftar</a>
                                <a href="testimonial.html" class="dropdown-item">Progres IELTS/TOEFL</a>
                                <a href="404.html" class="dropdown-item">Bakat Skolastik</a>
                                <a href="404.html" class="dropdown-item">Substansi</a>
                            </div>
                        </div>
                        <a href="about.html" class="nav-item nav-link">Template</a>
                        <a href="about.html" class="nav-item nav-link">Alumni Penerima Beasiswa</a>
                        <a href="about.html" class="nav-item nav-link">Tentang</a>
                        <a href="contact.html" class="nav-item nav-link">Hubungi Kami</a>
                        <a href="<?= base_url() ?>login" class="nav-item nav-link">Login</a>
                    </div>
                    <butaton type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-12 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Sistem Informasi & Monitorng Beasiswa (SIMOSA)</h1>
                            <p class="text-white pb-3 animated zoomIn">Selamat datang di aplikasi Sistem Informasi & Monitoring Beasiswa (SIMOSA)</p>

                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <!-- <img style="height: auto; width:70%;" class="img-fluid" src="img/logo.png" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">Tentang Kami</h6>
                            <h2 class="mt-2">Sistem Informasi & Monitoring Beasiswa (SIMOSA)</h2>
                        </div>
                        <p class="mb-4"><?= $tentang_kami->keterangan; ?></p>
                        <!-- <div class="row g-3">
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Award Winning</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Professional Staff</h6>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>24/7 Support</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Fair Prices</h6>
                            </div>
                        </div> -->
                        <div class="d-flex align-items-center mt-4">
                            <a class="btn btn-primary rounded-pill px-4 me-3" href="">Read More</a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="<?= base_url() ?>assets_style/assets_depan/img/about.jpg">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Newsletter Start -->
        <div class="container-xxl bg-primary newsletter my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container px-lg-5">
                <div class="row align-items-center" style="height: 250px;">
                    <div class="col-12 col-md-6">
                        <h3 class="text-white">Bersiap untuk mendapatkan infromasi secara langsung mengenai besiswa?</h3>
                        <small class="text-white">Masukan email anda untuk mendapatkan informasi terkini terkait beasiswa dalam Negeri dan luar Negeri</small>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Enter Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                    <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                        <img class="img-fluid mt-5" style="height: 250px;" src="<?= base_url() ?>assets_style/assets_depan/img/newsletter.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Artikel</h6>
                    <h2 class="mt-2">Artikel Sistem Informasi & Monitoring Beasiswa</h2>
                </div>
                <div class="row g-12">


                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <div class="container">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Posts List -->
                                    <table class="table table-borderd" id='postsList'>
                                        <tbody></tbody>
                                    </table>

                                    <!-- Paginate -->
                                    <!-- <div id='pagination'></div> -->
                                </div>
                            </div>
                        </div>



                    </div>

                </div>
            </div>
        </div>

        <div id='pagination'></div>


        <!-- Service End -->




        <!-- Script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type='text/javascript'>
            $(document).ready(function() {

                $('#pagination').on('click', 'a', function(e) {
                    e.preventDefault();
                    var pageno = $(this).attr('data-ci-pagination-page');
                    loadPagination(pageno);
                });

                loadPagination(0);

                function loadPagination(pagno) {
                    $.ajax({
                        url: '<?= base_url() ?>Wellcome/loadRecord/' + pagno,
                        type: 'get',
                        dataType: 'json',
                        success: function(response) {
                            $('#pagination').html(response.pagination);
                            createTable(response.result, response.row);
                        }
                    });
                }

                function createTable(result, sno) {
                    sno = Number(sno);
                    $('#postsList tbody').empty();
                    for (index in result) {
                        var id_artikel = result[index].id_artikel;
                        var judul = result[index].judul;
                        var foto = "<?php echo base_url('assets_style/image/'); ?>" + result[index].img;


                        sno += 1;


                        sno += 1;

                        var tr = "<div class='card' style='width: 100%;'>";
                        tr += "<div class='row'>";
                        tr += "<div class='col-md-4'>";
                        tr += "<img class='card-img-top' src='" + foto + "' alt='" + foto + "'>";
                        tr += "</div>";
                        tr += "<div class='col-md-8'>";
                        tr += "<div class='card-body'>";
                        tr += "<h5 class='card-title'>" + judul + "</h5>";
                        tr += "</div>";
                        tr += "</div>";
                        tr += "</div>";
                        tr += "</div>";
                        tr += "<br>";

                        // var tr = "<div class=`col-lg-4 col-md-7 wow zoomIn` data-wow-delay=`0.1s`>";
                        // tr += "<div class=`service-item d-flex flex-column justify-content-center text-center rounded`>";
                        // tr += " <div class=`flex-shrink-0`>";
                        // tr += "</div>";
                        // tr += "<h6 class=`mt-auto`>" + sno + "</h6>";
                        // tr += "<a class=`btn px-3 mt-auto mx-auto` href=``>Read More</a>";
                        // tr += "</div>";
                        // tr += "</div>";
                        $('#postsList tbody').append(tr);

                        // var tr = "<tr>";
                        // tr += "<td>" + sno + "</td>";
                        // tr += "<td><a href='" + 1 + "' target='_blank' >" + judul + "</a></td>";
                        // tr += "</tr>";
                        // $('#postsList tbody').append(tr);

                    }
                }

            });
        </script>


        <!-- Portfolio Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Dokumentasi Kegiatan</h6>
                    <h2 class="mt-2">Foto Dokumentasi Kegiatan</h2>
                </div>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-5" id="portfolio-flters">
                            <li class="btn px-3 pe-4 active" data-filter="*">Tampilkan Semua</li>
                            <li class="btn px-3 pe-4" data-filter=".first">Pelaksanaan IELTS</li>
                            <li class="btn px-3 pe-4" data-filter=".second">Sosialisasi</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-4 portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.1s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="<?= base_url() ?>assets_style/assets_depan/img/portfolio-1.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="<?= base_url() ?>assets_style/assets_depan/img/portfolio-1.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.3s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="<?= base_url() ?>assets_style/assets_depan/img/portfolio-2.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="<?= base_url() ?>assets_style/assets_depan/img/portfolio-2.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.6s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="<?= base_url() ?>assets_style/assets_depan/img/portfolio-3.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="<?= base_url() ?>assets_style/assets_depan/img/portfolio-3.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.1s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="<?= base_url() ?>assets_style/assets_depan/img/portfolio-4.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="<?= base_url() ?>assets_style/assets_depan/img/portfolio-4.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.3s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="<?= base_url() ?>assets_style/assets_depan/img/portfolio-5.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="<?= base_url() ?>assets_style/assets_depan/img/portfolio-5.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.6s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="<?= base_url() ?>assets_style/assets_depan/img/portfolio-6.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="<?= base_url() ?>assets_style/assets_depan/img/portfolio-6.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->


        <!-- Testimonial Start -->
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">Testimonial</h6>
            <h2 class="mt-2">Testimonial Alumni Penerima Beasiswa</h2>
        </div>
        <div class="container-xxl bg-primary testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url() ?>assets_style/assets_depan/img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url() ?>assets_style/assets_depan/img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url() ?>assets_style/assets_depan/img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url() ?>assets_style/assets_depan/img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url() ?>assets_style/assets_depan/img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Informasi Alumni</h6>
                    <h2 class="mt-2">Bertemu dan Berkomunikasi dengan Alumni Penerima Beasiswa</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="<?= base_url() ?>assets_style/assets_depan/img/team-1.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Jhon Doe</h5>
                                <small>CEO</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="<?= base_url() ?>assets_style/assets_depan/img/team-2.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Emma William</h5>
                                <small>Manager</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="<?= base_url() ?>assets_style/assets_depan/img/team-3.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Noah Michael</h5>
                                <small>Designer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Informasi</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Jl. Raya Bandung - Sumedang No.Km.20, Cibeusi, Kec. Jatinangor, Kabupaten Sumedang, Jawa Barat 45363</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope me-3"></i>labsakom@ipdn.ac.id</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>


                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Sistem Informasi & Monitoring Beasiswa</a>, All Right Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="https://htmlcodex.com">Labsakom IPDN</a>

                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets_style/assets_depan/lib/wow/wow.min.js"></script>
    <script src="<?= base_url() ?>assets_style/assets_depan/lib/easing/easing.min.js"></script>
    <script src="<?= base_url() ?>assets_style/assets_depan/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url() ?>assets_style/assets_depan/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>assets_style/assets_depan/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>assets_style/assets_depan/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url() ?>assets_style/assets_depan/js/main.js"></script>
</body>

</html>