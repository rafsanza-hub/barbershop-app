<?= $this->extend('auth/layout.php') ?>
<?= $this->section('content') ?>
<div id="app">
    <section class="section">
        <div class="container mt-3">
            <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-xl-5 col-lg-6">

                    <div class="login-brand">
                        <img src="<?= base_url('assets/img/stisla-fill.svg') ?>" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4><?= lang('Auth.register') ?></h4>
                        </div>

                        <div class="card-body">
                            <p class="text-muted">Register a new membership</p>

                            <?= view('App\Views\Auth\_message_block') ?>

                            <form action="<?= url_to('register') ?>" method="post">
                                <?= csrf_field() ?>

                                <!-- Email Input -->
                                <div class="form-group">
                                    <label for="email"><?= lang('Auth.email') ?></label>
                                    <input type="email" 
                                           name="email" 
                                           class="form-control <?= session('errors.email') ? 'is-invalid' : '' ?>" 
                                           placeholder="<?= lang('Auth.email') ?>" 
                                           value="<?= old('email') ?>" 
                                           required>
                                    <div class="invalid-feedback">
                                        <?= session('errors.email') ?>
                                    </div>
                                </div>

                                <!-- Username Input -->
                                <div class="form-group">
                                    <label for="username"><?= lang('Auth.username') ?></label>
                                    <input type="text" 
                                           name="username" 
                                           class="form-control <?= session('errors.username') ? 'is-invalid' : '' ?>" 
                                           placeholder="<?= lang('Auth.username') ?>" 
                                           value="<?= old('username') ?>" 
                                           required>
                                    <div class="invalid-feedback">
                                        <?= session('errors.username') ?>
                                    </div>
                                </div>

                                <!-- Password and Repeat Password -->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="password"><?= lang('Auth.password') ?></label>
                                        <input type="password" 
                                               name="password" 
                                               class="form-control <?= session('errors.password') ? 'is-invalid' : '' ?>" 
                                               placeholder="<?= lang('Auth.password') ?>" 
                                               autocomplete="off" 
                                               required>
                                        <div class="invalid-feedback">
                                            <?= session('errors.password') ?>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                                        <input type="password" 
                                               name="pass_confirm" 
                                               class="form-control <?= session('errors.pass_confirm') ? 'is-invalid' : '' ?>" 
                                               placeholder="<?= lang('Auth.repeatPassword') ?>" 
                                               autocomplete="off" 
                                               required>
                                        <div class="invalid-feedback">
                                            <?= session('errors.pass_confirm') ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- Register Button -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block"><?= lang('Auth.register') ?></button>
                                </div>
                            </form>

                            <!-- OR Social Login -->
                            <div class="text-center mt-4 mb-3">
                                <p>- OR -</p>
                                <a href="<?= base_url("auth/google/register") ?>" class="btn btn-primary btn-lg btn-block">
                                    <i class="fab fa-google-plus mr-2"></i> <?= lang('Auth.signUpGoogle') ?>
                                </a>
                            </div>

                            <!-- Already Registered -->
                            <div class="mt-5 text-muted text-center">
                                <?= lang('Auth.alreadyRegistered') ?> <a href="<?= url_to('login') ?>"><?= lang('Auth.signIn') ?></a>
                            </div>
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
