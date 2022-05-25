<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

<header class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="h1">Login Us</h1>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="<?php echo base_url() . 'administrator/auth' ?>" method="post">
                <div class="form-group">
                    <h3><b>Sudah Punya Akun?</b></h3>
                    <p>Silahkan login disini</p>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div align="right">
                    <button type="submit" name="submit" class="btn btn-primary mt-4" style="padding-top: 2px; width: 90px">Login</button>
                </div>
            </form>

        </div>
    </div>
</div>
<?= $this->endSection() ?>