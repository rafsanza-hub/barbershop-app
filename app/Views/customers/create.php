<?= $this->extend('layouts/main.php') ?>

<!-- Content -->
<?= $this->section('content') ?>

<!-- general form elements disabled -->
<section class="section">
    <div class="section-header">
        <h1>Register User</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Users</a></div>
            <div class="breadcrumb-item">Register</div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Register User</h2>
        <p class="section-lead">
            Please fill out the form below to register a new user.
        </p>

        <div class="card">
            <form action="<?= base_url("customer/save") ?>" method="post">
                <?= csrf_field() ?>
                <div class="card-header">
                    <h4>Form Registrasi User</h4>
                </div>
                <div class="card-body">
                    <?= view('App\Views\layouts\_message_block') ?>

                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Username input -->
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control <?= session('errors.username') ? 'is-invalid' : '' ?>" placeholder="Enter username" value="<?= old('username') ?>">
                                <?php if (session('errors.username')) : ?>
                                    <div class="invalid-feedback">
                                        <?= session('errors.username') ?>
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Username input -->
                            <div class="form-group">
                                <label>Fullname</label>
                                <input type="text" name="fullname" class="form-control <?= session('errors.fullname') ? 'is-invalid' : '' ?>" placeholder="Enter fullname" value="<?= old('fullname') ?>">
                                <?php if (session('errors.fullname')) : ?>
                                    <div class="invalid-feedback">
                                        <?= session('errors.fullname') ?>
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Email input -->
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control <?= session('errors.email') ? 'is-invalid' : '' ?>" placeholder="Enter email" value="<?= old('email') ?>">
                                <?php if (session('errors.email')) : ?>
                                    <div class="invalid-feedback">
                                        <?= session('errors.email') ?>
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>
                  
                 
                        <div class="col-sm-6">
                            <!-- Password input -->
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control <?= session('errors.password') ? 'is-invalid' : '' ?>" placeholder="Enter password">
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
                                <input type="password" name="pass_confirm" class="form-control <?= session('errors.pass_confirm') ? 'is-invalid' : '' ?>" placeholder="Enter password again">
                                <?php if (session('errors.pass_confirm')) : ?>
                                    <div class="invalid-feedback">
                                        <?= session('errors.pass_confirm') ?>
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>
                        </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="<?= base_url() ?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<?= $this->endSection() ?>