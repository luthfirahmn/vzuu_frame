<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="d-flex flex-column scroll-y me-n7 pe-7">
    <!--begin::Input group-->
    <div class="fv-row mb-7">
        <input class="form-control" id="id" name="id" type="hidden" value="<?= isset($id) ? $id : "" ?>" />
        <!--begin::Label-->
        <label class="required fw-semibold fs-6 mb-4">Full Name</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="text" id="fullname" name="fullname" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name" value="<?= isset($fullname) ? $fullname : "" ?>" data-type="input" autocomplete="off" />
        <!--end::Input-->
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="fv-row mb-7">
        <!--begin::Label-->
        <label class="required fw-semibold fs-6 mb-4">Email</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="text" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" id="email" name="email" value="<?= isset($email) ? $email : '' ?>" data-type="input" autocomplete="off" />
        <!--end::Input-->
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="fv-row mb-7">
        <!--begin::Label-->
        <label class="required fw-semibold fs-6 mb-4">Password</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="text" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="password" id="password" name="password" data-type="input" autocomplete="off" />
        <!--end::Input-->
    </div>
    <!--end::Input group-->
    <div class="fv-row mb-7">
        <!--begin::Label-->
        <label class="required fw-semibold fs-6 mb-4">Status</label>
        <!--end::Label-->
        <!--begin::Input-->
        <label class="form-check form-switch form-check-custom form-check-solid">
            <input class="form-check-input" type="checkbox" value="enabled" <?= (isset($checked) ? ($checked == 'enabled' ? "checked=\"checked\"" : "") : "checked=\"checked\"") ?> name="status" id="status">
            <span class="form-check-label fw-semibold text-muted">Enabled</span>
        </label>
        <!--end::Input-->
    </div>

</div>