<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<style>
    body {
        background: radial-gradient(circle at top left, #f1c3ce -10%, #fcf7f2, transparent 55%);
    }

    .container {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form {
        max-width: 900px;
        width: 100%;
    }

    .datepicker-container {
        max-width: 300px;
        margin: 20px auto;
    }

    .calendar-icon {
        cursor: pointer;
    }

    .datepicker {
        padding: 0;
        text-align: center;
    }

    .datepicker td,
    .datepicker th {
        width: 2.5rem;
        height: 2.5rem;
        font-size: 0.85rem;
    }

    .datepicker.datepicker-dropdown.dropdown-menu.datepicker-orient-left.datepicker-orient-bottom {
        margin-top: 160px !important;
        margin-left: 265px !important;
        left: auto !important;
        right: auto !important;
        z-index: 10;
    }

    .datepicker-dropdown:after {
        border-bottom-color: #08c;
    }

    .datepicker-days .table-condensed thead tr:nth-child(2),
    .datepicker-months .table-condensed thead tr:nth-child(2),
    .datepicker-years .table-condensed thead tr:nth-child(2),
    .datepicker-decades .table-condensed thead tr:nth-child(2),
    .datepicker-centuries .table-condensed thead tr:nth-child(2) {
        background: linear-gradient(to bottom, #08c, #04c);
        color: #fff;
    }

    .datepicker-days .table-condensed thead tr:nth-child(2) th:hover,
    .datepicker-months .table-condensed thead tr:nth-child(2) th:hover,
    .datepicker-years .table-condensed thead tr:nth-child(2) th:hover,
    .datepicker-decades .table-condensed thead tr:nth-child(2) th:hover,
    .datepicker-centuries .table-condensed thead tr:nth-child(2) th:hover {
        background: linear-gradient(to bottom, #08c, #04c);
        color: #fff;
    }

    .datepicker-days .table-condensed tfoot,
    .datepicker-months .table-condensed tfoot,
    .datepicker-years .table-condensed tfoot,
    .datepicker-decades .table-condensed tfoot,
    .datepicker-centuries .table-condensed tfoot {
        border-top: solid 1px rgba(0, 0, 0, .15);
    }

    .datepicker label {
        z-index: 1;
    }

    .datepicker .fv-plugins-message-container {
        z-index: 0;
    }
</style>

<div style="margin-top: 10rem;"></div>

<section class="sign-up-section">
    <div class="text-center " style="margin-bottom: 50px;">
        <h6 class=" text-regular text-grey">BUAT AKUN</h6>
        <h3 class="pink text-demibold">
            Saatnya Berinvestasi Untuk Kulit Anda!
        </h3>
    </div>

    <div class="container text-center">
        <form id="signup" class="form">
            <div class="mb-3 position-relative">
                <input type="text" id="nama_depan" name="nama_depan" class="form-control" placeholder="Nama Depan">
            </div>
            <div class="mb-3 position-relative" style="margin-top: 30px;">
                <input type="text" id="nama_belakang" name="nama_belakang" class="form-control" placeholder="Nama Belakang">
            </div>
            <div class="mb-3 position-relative" style="margin-top: 30px;">
                <select id="gender" name="gender" class="form-select">
                    <option selected value="">Jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="datepicker mb-3 position-relative" style="margin-top: 30px;">
                <input type="text" id="birthdate" name="birthdate" class="form-control" placeholder="Tanggal Lahir">
                <label for="birthdate" class="position-absolute" style="right: 10px; top: 50%; transform: translateY(-50%);padding-right:10px;">
                    <img src="<?= IMAGE_FRONTEND ?>/date.png" alt="Calendar Icon" width="20" height="20">
                </label>
            </div>
            <div class="mb-3 position-relative" style="margin-top: 30px;">
                <input type="text" id="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="mb-3 position-relative" style="margin-top: 30px;">
                <input type="text" inputmode="numeric" id="no_hp" name="no_hp" class="form-control" placeholder="Nomor Hp">
            </div>
            <div class="mb-3 position-relative" style="margin-top: 30px;">
                <input type="password" id="password" name="password" autocomplete="off" class="form-control" placeholder="Kata Sandi">
            </div>
            <div type="button" class="d-flex justify-content-center mt-4">
                <button id="btnSubmit" type="submit" class="custom-button-brown">
                    DAFTAR
                </button>
            </div>
            <div class="text-medium text-grey mt-3">
                Sudah punya akun? <a href="<?= base_url('login') ?>" class="text-brown text-demibold">MASUK</a>
            </div>
        </form>
    </div>
</section>

<div class="position-relative" style="z-index: -1; bottom: -35rem;">
    <img draggable="false" src="<?= IMAGE_FRONTEND ?>/mask-grey-r.png" alt="Background Image" class=" img-fluid background-img position-absolute bottom-0 end-0" />
</div>