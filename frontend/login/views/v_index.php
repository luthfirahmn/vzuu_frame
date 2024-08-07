<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div style="margin-top: 10rem;"></div>

<style>
    body {
        background: radial-gradient(circle at top left, #f1c3ce -10%, #fcf7f2, transparent 55%);
    }

    .container {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form-signin {
        max-width: 900px;
        width: 100%;
    }

    .form-signin .forgot-password {
        display: block;
        text-align: right;
        margin-top: 10px;
        margin-bottom: 10px;
        color: #7A6D65;
    }

    .btn-custom {
        border-radius: 50px;
        padding: 0.75rem 2rem;
        background-color: #7A6D65;
        color: white;
        border: none;
    }
</style>

<div class="text-center " style="margin-bottom: 80px;">
    <h6 class=" text-regular text-grey">MASUK</h6>
    <h3 class="pink text-demibold">
        Selamat Datang Kembali!
    </h3>
</div>

<style>
    .alert-warning {
        border-style: none;
        border-left-style: solid;
        border-left-width: thick;
        border-color: #f44336;
        background-color: #f4c3c6;
        padding-left: 4px;
        border-radius: 15px;
        padding: 20px;
        color: black;
    }

    .alert {
        margin-left: 15px;
        color: black;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    .alert:hover {
        color: white;
    }
</style>

<div id="alert-messages" class="px-5 alert-warning mx-auto" style="width:370px;display: none;">
</div>


<div class="container mt-5 px-5">

    <form id="login" class="form-signin">
        <div style="margin-bottom: 30px;">
            <input type="text" id="email" name="email" class="form-control" autocomplete="off" placeholder="Email">
        </div>

        <div>
            <input type="password" id="password" name="password" class="form-control" autocomplete="off" placeholder="Kata Sandi">
            <a href="./forgot-password.html" class="forgot-password">Lupa kata sandi?</a>
        </div>
        <div class="d-flex justify-content-center mt-3">
            <button type="submit" id="btnSubmit" class="custom-button-brown">
                MASUK
            </button>
        </div>
        <p class=" mt-3 mb-3 text-center text-regular">Belum punya akun?
            <a href="<?= base_url('signup') ?>" style="color: #7A6D65;">DAFTAR</a>
        </p>
    </form>
</div>

<div class="position-relative" style="z-index: -1; bottom: -35rem;">
    <img draggable="false" src="<?= IMAGE_FRONTEND ?>/mask-grey-r.png" alt="Background Image" class=" img-fluid background-img position-absolute bottom-0 end-0" />
</div>