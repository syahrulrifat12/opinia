<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<header class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="h1">Registrasi Us</h1>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div>
                <img src="<?php echo base_url('public/assets/login.png') ?>" style="width: 400px; height: 400px;">

            </div>
        </div>
        <div class="col-lg-6">

            <form id="contact" action="<?php echo base_url() . 'admin/pengguna/simpan_pengguna_newup' ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-6">
                        <fieldset>
                            <label>Nama lengkap</label>
                            <input name="xnama" class="form-control" id="inputUserName" placeholder="Your Nama Lengkap" required>
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                            <label>E-mail</label>
                            <input name="xemail" class="form-control" id="inputEmail3" placeholder="Your email" required>
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <label for="inputUserName">Jenis Kelamin</label>

                        <div class="radio">
                            <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                            <label for="inlineRadio1"> Laki-Laki </label>
                        </div>
                        <div class="radio">
                            <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
                            <label for="inlineRadio2"> Perempuan </label>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <fieldset>
                            <label>Username</label>
                            <input name="xusername" class="form-control" id="inputUserName" placeholder="Your username" required>
                        </fieldset>
                    </div>
                    <div class="col-lg-12">
                        <fieldset>
                            <label>Password</label>
                            <input name="xpassword" class="form-control" id="inputPassword3" placeholder="Your password" required>

                        </fieldset>
                    </div>
                    <div class="col-lg-12">
                        <fieldset>
                            <label>Ulangi Password</label>
                            <input name="xpassword2" class="form-control" id="inputPassword4" placeholder="Your password Repeat" required>
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset>
                            <label>Kontak Person</label>
                            <input name="xkontak" class="form-control" id="inputUserName" placeholder="Your kontak" required>
                        </fieldset>
                    </div>


                    <div class="col-lg-12" style="margin-top: 20px;">
                        <fieldset>
                            <label>Photo</label>
                            <input style="border:0px; padding-left: 2px; " type="file" name="filefoto" required="">
                        </fieldset>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary mt-4 float-right" style="padding-top: 2px; width: 90px">Daftar</button>
                    <hr>
                    <a class="btn btn-default mt-4 float-right" href='<?= base_url('login2') ?>' style="padding-top: 2px;">Kembali ke login..</a>
                </div>
            </form>
        </div>
    </div>
    <?= $this->endSection() ?>