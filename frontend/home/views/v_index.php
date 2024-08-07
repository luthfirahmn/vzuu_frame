<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<style>
    .video-background {
        position: relative;
        overflow: hidden;
        background-color: transparent !important;
        background: none !important;
    }

    .bg-white {
        --bs-bg-opacity: 0;
        background-color: transparent !important;
    }

    .video-background video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 0;
    }

    #playPauseBtn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 20;
        background: url('./assets/img/button_play.svg') no-repeat center center;
        background-size: contain;
        width: 100px;
        height: 100px;
        cursor: pointer;
        transition: all 0.3s ease;
        border: none;
        outline: none;
    }

    #playPauseBtn:hover {
        opacity: 0.75;
    }

    #playPauseBtn svg {
        display: none;
    }

    .top-gradient-background {
        background:
            radial-gradient(circle at top left, #f1c3ce -2%, #fcf7f2, transparent 50%);
    }

    @media (min-width: 1280px) {
        .texting {
            width: 35%;
        }

        .videos {
            width: 55rem;
        }
    }

    @media (min-width: 1380px) {
        .texting {
            width: 35%;
        }

        .videos {
            width: 60rem;
        }
    }
</style>

<section class="d-flex justify-content-start" style="min-height: 100vh; margin-bottom: 10rem;">
    <div class="container-fluid texting " style="float: left;">
        <div class=" text-center animatable fadeIn">
            <h6 class="text-bold text-grey letter-spacing-xs" style="padding-top: 35vh">
                SELAMAT DATANG DI VZUU
            </h6>
            <h2 class="pink text-demibold">Semua Tentang <br />Anda</h2>
            <a class="btn btn-brown text-light rounded-pill px-4 mt-3" href="#tentang-vzuu">TENTANG VZUU</a>
        </div>
        <div class=" d-flex shadow-lg rounded-5 videos" style="max-height: 100vh; height: 150rem; position: absolute;  top: -50px; right: -30px; border-radius: 0.1rem; overflow: hidden; ">
            <video id="backgroundVideo" class="rounded-5" style=" object-fit: cover;  border-radius:inherit; width: 100%; height: 100%;">
                <source src="<?= VIDEO_FRONTEND ?>/video.mov" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</section>

<img draggable="false" src="<?= IMAGE_FRONTEND ?>/mask-grey2.png" class="custom-image">

<section id="tentang-vzuu" class="section pt-5" style="background: radial-gradient(circle at bottom right, #f1c3ce -2%,#fcf7f2, transparent 50%); padding-bottom: 100px;">
    <div class=" container">
        <div class="row align-items-center">
            <div class="col-lg-5 text-center text-lg-start">
                <div style="position: relative; max-width: 100%; height: auto;">
                    <img src="<?= IMAGE_FRONTEND ?>/founder.png" alt="Founder Image" class="img-fluid animatable bounceInLeft" style="max-width: 100%; height: auto; position: relative; z-index: 1;" />

                    <img src="<?= IMAGE_FRONTEND ?>/ttd.png" alt="Signature Image" class="animatable fadeInUp" style="position: absolute; bottom: 0; left: 24rem; z-index: 2;" />
                </div>
            </div>
            <div class="col-lg-7 animatable fadeInUp">
                <h6 class="text-grey text-regular">CERITA DIBALIK VZUU</h6>
                <h2 class="pink text-demibold">Halo, Kami adalah Vzuu</h2>
                <p class="text-regular text-grey mt-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat.
                    <br /><br />
                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                    cupidatat non proident, sunt in culpa qui officia deserunt mollit
                    anim id est laborum.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section text-white py-4 position-relative" id="section-slider" style="
        background: linear-gradient(
          #dbb8a1 32%,
          #eedbcc 59%,
          #e3cab9 78%,
          #dbb8a1 93%
        );
      ">
    <div class="position-absolute bottom-0 end-0 z-index-n1">
        <img src="<?= IMAGE_FRONTEND ?>/mask-white-r.png" alt="Background Image" class="animatable fadeInUp img-fluid" />
    </div>
    <div class="container py-5">
        <h6 class="text-center text-regular animatable fadeIn">VZUU GRUP</h6>
        <h3 class="text-center text-demibold animatable fadeIn">
            Temukan Solusi Untuk Permasalahan Kulitmu
        </h3>

        <div id="carouselExampleIndicators" class="carousel slide mt-5 animatable bounceInRight" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center ps-4">

                        <div class="col-md-6 col-lg-5 mb-4">
                            <div class="card bg-transparent border-0 position-relative rounded-5" style="max-width: 25rem">
                                <img src="<?= IMAGE_FRONTEND ?>/clinic.png" class="card-img-top" alt="Beauty Image" />
                                <div class="card-img-overlay d-flex flex-column justify-content-end p-0">
                                    <div class="card-text text-light px-4 pt-3 m-0 overlay-text d-flex justify-content-between">
                                        <div class="hover-div">
                                            <p class="fw-bold fs-5">VZUU Clinic</p>

                                        </div>
                                        <a href="clinic/clinic.html" class="text-light">
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-5 mb-4">
                            <div class="card bg-transparent border-0 position-relative rounded-5" style="max-width: 25rem">
                                <img src="<?= IMAGE_FRONTEND ?>/beauty.png" class="card-img-top" alt="Beauty Image" />
                                <div class="card-img-overlay d-flex flex-column justify-content-end p-0">
                                    <div class="card-text text-light px-4 pt-3 m-0 overlay-text d-flex justify-content-between">
                                        <div class="hover-div">
                                            <p class="fw-bold fs-5">VZUU Beauty</p>
                                        </div>
                                        <a href="beauty/beauty.html" class="text-light">
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="carousel-item">
            <div class="row justify-content-center ps-5">

              <div class="col-md-6 col-lg-5 mb-4">
                <div class="card bg-transparent border-0 position-relative rounded-5" style="max-width: 25rem">
                  <img src="./assets/img/clinic.png" class="card-img-top" alt="Beauty Image" />
                  <div class="card-img-overlay d-flex flex-column justify-content-end p-0">
                    <div class="card-text text-light px-4 pt-3 m-0 overlay-text d-flex justify-content-between">
                      <div>
                        <p class="fw-bold fs-5">VZUU Clinic</p>
                      </div>
                      <a href="clinic/clinic.html" class="text-light">
                        <i class="bi bi-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-5 mb-4">
                <div class="card bg-transparent border-0 position-relative rounded-5" style="max-width: 25rem">
                  <img src="./assets/img/beauty.png" class="card-img-top" alt="Beauty Image" />
                  <div class="card-img-overlay d-flex flex-column justify-content-end p-0">
                    <div class="card-text text-light px-4 pt-3 m-0 overlay-text d-flex justify-content-between">
                      <div>
                        <p class="fw-bold fs-5">VZUU Beauty</p>
                      </div>
                      <a href="beauty/beauty.html" class="text-light">
                        <i class="bi bi-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div> -->
            </div>

            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <i class="bi bi-arrow-left" style="color: #545454; font-size: 24px"></i>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <i class="bi bi-arrow-right" style="color: #545454; font-size: 24px"></i>
          <span class="visually-hidden">Next</span>
        </button> -->
        </div>
    </div>

</section>

<section class="section animatable fadeInUp fast py-5 top-gradient-background" data-aos-duration="500">
    <div class="container">

        <div class="text-center">
            <h6 class="text-regular text-grey mb-4 fs-16">BLOG VZUU</h6>
            <h2 class="text-demibold pink mb-6 fs-31">Dapatkan Inspirasi dan Terhubung Dengan Kami</h2>
        </div>

        <div class="row mt-5 ">
            <div class="col-md-4 mb-4">
                <div class="card border-0 h-100 bg-transparent">
                    <img src="<?= IMAGE_FRONTEND ?>/blog1.png" class="card-img-top" alt="Blog post" />
                    <div class="card-body p-0 pt-2">
                        <h6 class="pink text-demibold">KULIT</h6>
                        <h4 class="card-title text-demibold text-grey">
                            5 Tips Kecantikan Menjelang Hari Pernikahan
                        </h4>
                        <p class="card-text text-regular">
                            Menjelang hari pernikahan, memang semakin banyak persiapan
                            yang harus dilakukan.
                        </p>
                        <a href="<?= base_url('blog/detail') ?>" class="text-brown text-regular">BACA LEBIH LANJUT</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 h-100 bg-transparent">
                    <img src="<?= IMAGE_FRONTEND ?>/blog2.png" class="card-img-top" alt="Blog post" />
                    <div class="card-body p-0 pt-2">
                        <h6 class="pink text-demibold">KULIT</h6>
                        <h4 class="card-title text-demibold text-grey">
                            Alasan Mengapa Tidak Boleh Memencet Jerawat
                        </h4>
                        <p class="card-text text-regular">
                            Memencet jerawat bisa menyebabkan lebih banyak masalah kulit.
                        </p>
                        <a href="<?= base_url('blog/detail') ?>" class="text-brown text-regular">BACA LEBIH LANJUT</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 h-100 bg-transparent">
                    <img src="<?= IMAGE_FRONTEND ?>/blog3.png" class="card-img-top" alt="Blog post" />
                    <div class="card-body p-0 pt-2">
                        <h6 class="pink text-demibold">KULIT</h6>
                        <h4 class="card-title text-demibold text-grey">
                            Perawatan Wajah Jika Kurang Tidur di Malam Hari
                        </h4>
                        <p class="card-text text-regular">
                            Kurang tidur bisa menyebabkan kulit tampak kusam.
                        </p>
                        <a href="<?= base_url('blog/detail') ?>" class="text-brown text-regular">BACA LEBIH LANJUT</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a class="btn btn-brown rounded-5 mt-5" href="<?= base_url('blog') ?>">LIHAT SEMUA BLOG</a>
        </div>
    </div>
</section>

<section class="px-4 animatable fadeInUp my-5">
    <img src="<?= IMAGE_FRONTEND ?>/group.png" class="card-img-top img-fluid rounded-5" style="padding: 50px;" alt="fotogroup">
</section>

<div class="position-relative" style="z-index: -1; bottom: -32rem;">
    <img draggable="false" src="<?= IMAGE_FRONTEND ?>/mask-grey-r.png" alt="Background Image" class="img-fluid background-img position-absolute bottom-0 end-0" />
</div>