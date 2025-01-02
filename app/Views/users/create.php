<?= $this->extend('layouts/main.php') ?>

<!-- Content -->
<?= $this->section('content') ?>

<!-- general form elements disabled -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Register User</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Register</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Registrasi User</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?= view('App\Views\Auth\_message_block') ?>

                        <form action="<?= url_to('register') ?>" method="post">
                            <?= csrf_field() ?>
                            <input type="hidden" name="role-name" value="<?= $roleName ?>">
                            <h1><?= $roleName ?></h1>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- Username input -->
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" placeholder="Enter username" value="<?= old('username') ?>">
                                        <?php if (session('errors.username')) : ?>
                                            <div class="invalid-feedback">
                                                <?= session('errors.username') ?>
                                            </div>
                                        <?php endif ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- Email input -->
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" placeholder="Enter email" value="<?= old('email') ?>">
                                        <?php if (session('errors.email')) : ?>
                                            <div class="invalid-feedback">
                                                <?= session('errors.email') ?>
                                            </div>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- Password input -->
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="Enter password">
                                        <?php if (session('errors.password')) : ?>
                                            <div class="invalid-feedback">
                                                <?= session('errors.password') ?>
                                            </div>
                                        <?php endif ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- Repeat Password input -->
                                    <div class="form-group">
                                        <label>Repeat Password</label>
                                        <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="Enter password again">
                                        <?php if (session('errors.pass_confirm')) : ?>
                                            <div class="invalid-feedback">
                                                <?= session('errors.pass_confirm') ?>
                                            </div>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
    </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="<?= base_url() ?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<?= $this->endSection() ?>