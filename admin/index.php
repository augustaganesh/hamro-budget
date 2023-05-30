<?php
include('../config/config.php');
$title =  "Admin Login";
include('../include/header.php');
include('../include/navbar.php');
?>

<section class="sect-admin-index">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form class="form-bg form-ui" action="<?= base_url('admin/index.php') ?>" autocomplete="">
                    <div class="form-group">
                        <label for="">Username<span>*</span></label>
                        <input type="email" name="username" class="form-control" placeholder="Enter your email" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="">Password <span>*</span></label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Yyour password" required>
                    </div>
                    <button type="submit" class="btn btn-block py-2 px-3 fw-bold btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</section>