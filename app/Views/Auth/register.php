<?= $this->extend('auth/layouts/main.php') ?>
<?= $this->section('content') ?>

<div class="register-box">
    <div class="register-logo">
        <a href="<?= base_url() ?>"><b>Admin</b>LTE</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership</p>

            <?= view('App\Views\Auth\_message_block') ?>

            <form action="<?= url_to('register') ?>" method="post">
                <?= csrf_field() ?>

                <div class="input-group mb-3">
                    <input type="email" 
                           class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" 
                           name="email" 
                           placeholder="<?= lang('Auth.email') ?>" 
                           value="<?= old('email') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text" 
                           class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" 
                           name="username" 
                           placeholder="<?= lang('Auth.username') ?>" 
                           value="<?= old('username') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" 
                           name="password" 
                           class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" 
                           placeholder="<?= lang('Auth.password') ?>" 
                           autocomplete="off">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" 
                           name="pass_confirm" 
                           class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" 
                           placeholder="<?= lang('Auth.repeatPassword') ?>" 
                           autocomplete="off">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.register') ?></button>
                    </div>
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                
                <a href="<?= base_url("auth/google/register") ?>" class="btn btn-block btn-primary">
                    <i class="fab fa-google-plus mr-2"></i>
                    Sign up using Google+
                </a>
            </div>

            <a href="<?= url_to('login') ?>" class="text-center"><?= lang('Auth.alreadyRegistered') ?></a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
