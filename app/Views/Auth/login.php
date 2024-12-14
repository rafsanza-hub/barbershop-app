<?= $this->extend('auth/layouts/main.php') ?>
<?= $this->section('content') ?>

<div class="login-box">
    <div class="login-logo">
        <a href="<?= site_url() ?>"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg"><?= lang('Auth.loginTitle') ?></p>

            <!-- Pesan Blok Global -->
            <?= view('App\Views\Auth\_message_block') ?>

            <form action="<?= url_to('login') ?>" method="post">
                <?= csrf_field() ?>

                <!-- Input Email atau Username -->
                <?php if ($config->validFields === ['email']): ?>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control <?= session('errors.login') ? 'is-invalid' : '' ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            <?= session('errors.login') ?>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control <?= session('errors.login') ? 'is-invalid' : '' ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            <?= session('errors.login') ?>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Input Password -->
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control <?= session('errors.password') ? 'is-invalid' : '' ?>" placeholder="<?= lang('Auth.password') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        <?= session('errors.password') ?>
                    </div>
                </div>

                <!-- Remember Me Checkbox -->
                <?php if ($config->allowRemembering): ?>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                <label for="remember">
                                    <?= lang('Auth.rememberMe') ?>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                <?php endif; ?>

                <!-- Submit Button -->
                <div class="row">
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.loginAction') ?></button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <!-- Social Auth Links -->
            <div class="social-auth-links text-center mb-3">
                <p>- OR -</p>
                <a href="<?= base_url('auth/google/login') ?>" class="btn btn-block btn-primary">
                    <i class="fab fa-google-plus mr-2"></i> <?= lang('Auth.loginWithGoogle') ?>
                </a>
            </div>
            <!-- /.social-auth-links -->

            <!-- Forgot Password & Registration Links -->
            <?php if ($config->activeResetter): ?>
                <p class="mb-1">
                    <a href="<?= url_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a>
                </p>
            <?php endif; ?>
            <?php if ($config->allowRegistration): ?>
                <p class="mb-0">
                    <a href="<?= url_to('register') ?>" class="text-center"><?= lang('Auth.needAnAccount') ?></a>
                </p>
            <?php endif; ?>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>

<?= $this->endSection() ?>
