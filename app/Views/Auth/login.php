<?= $this->extend('auth/layout.php') ?>
<?= $this->section('content') ?>
<div id="app">
    <section class="section">
        <div class="container mt-3">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="<?= base_url('assets/img/stisla-fill.svg') ?>" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4><?= lang('Auth.loginTitle') ?></h4>
                        </div>

                        <div class="card-body">
                            <!-- Pesan Blok Global -->
                            <?= view('App\Views\Auth\_message_block') ?>

                            <form action="<?= url_to('login') ?>" method="post">
                                <?= csrf_field() ?>

                                <!-- Input Email atau Username -->
                                <?php if ($config->validFields === ['email']): ?>
                                    <div class="form-group">
                                        <label for="login"><?= lang('Auth.email') ?></label>
                                        <input id="login" type="email" name="login" class="form-control <?= session('errors.login') ? 'is-invalid' : '' ?>" placeholder="<?= lang('Auth.email') ?>" required autofocus>
                                        <div class="invalid-feedback">
                                            <?= session('errors.login') ?>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="form-group">
                                        <label for="login"><?= lang('Auth.emailOrUsername') ?></label>
                                        <input id="login" type="text" name="login" class="form-control <?= session('errors.login') ? 'is-invalid' : '' ?>" placeholder="<?= lang('Auth.emailOrUsername') ?>" required autofocus>
                                        <div class="invalid-feedback">
                                            <?= session('errors.login') ?>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <!-- Input Password -->
                                <div class="form-group">
                                    <label for="password"><?= lang('Auth.password') ?></label>
                                    <input id="password" type="password" name="password" class="form-control <?= session('errors.password') ? 'is-invalid' : '' ?>" placeholder="<?= lang('Auth.password') ?>" required>
                                    <div class="invalid-feedback">
                                        <?= session('errors.password') ?>
                                    </div>
                                </div>

                                <!-- Remember Me Checkbox -->
                                <?php if ($config->allowRemembering): ?>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="remember" id="remember-me" class="custom-control-input" <?= old('remember') ? 'checked' : '' ?>>
                                            <label class="custom-control-label" for="remember-me"><?= lang('Auth.rememberMe') ?></label>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <!-- Submit Button -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block"><?= lang('Auth.loginAction') ?></button>
                                </div>
                            </form>

                            <!-- Social Auth Links -->
                            <div class="text-center">
                                <p>- OR -</p>
                                <a href="<?= base_url('auth/google/login') ?>" class="btn btn-danger btn-block">
                                    <i class="fab fa-google-plus mr-2"></i> <?= lang('Auth.loginWithGoogle') ?>
                                </a>
                            </div>

                            <!-- Forgot Password & Registration Links -->
                            <?php if ($config->activeResetter): ?>
                                <div class="mt-2 text-muted text-center">
                                    <a href="<?= url_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a>
                                </div>
                            <?php endif; ?>
                            <?php if ($config->allowRegistration): ?>
                                <div class="mt-2 text-muted text-center">
                                    <a href="<?= url_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="simple-footer">
                        Copyright &copy; Stisla <?= date('Y') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<?= $this->endSection() ?>
