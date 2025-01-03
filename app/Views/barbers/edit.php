<?= $this->extend('layouts/main'); ?>
<?= $this->section('main') ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <h1>Form Validation</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Forms</a></div>
            <div class="breadcrumb-item">Form Validation</div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Form Validation</h2>
        <p class="section-lead">
            Form validation using default from Bootstrap 4
        </p>

        <!-- <div class="row"> -->
        <?= view('App\Views\Auth\_message_block') ?>

        <div class="card">
            <form Action="<?= base_url('barber/update/'.$barber['id']) ?>" method="post">
            <?php csrf_field() ?>
                <input type="hidden" name="user_id" value="<?= $barber['user_id'] ?>" hidden>
                <div class="card-header">
                    <h4>Server-side Validation</h4>
                </div>
                <div class="card-body">
                <?= view('App\Views\layouts\_message_block') ?>

                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control <?= session('errors') && isset(session('errors')['fullname']) ? 'is-invalid' : ''; ?>" name="fullname" value="<?= old('fullname', $barber['fullname']) ?>">
                                <div class="invalid-feedback">
                                    <?= (session('errors')['fullname']) ?? null ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control <?= session('errors') && isset(session('errors')['username']) ? 'is-invalid' : ''; ?>" name="username" value="<?= old('username', $barber['username']) ?>">
                                <div class="invalid-feedback">
                                    <?= (session('errors')['username']) ?? null ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>email</label>
                                <input type="email" class="form-control <?= session('errors') && isset(session('errors')['email']) ? 'is-invalid' : ''; ?>" name="email" value="<?= old('email', $barber['email']) ?>">
                                <div class="invalid-feedback">
                                    <?= (session('errors')['email']) ?? null ?>
                                </div>
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

<?= $this->endSection('content') ?>


<?= $this->endSection() ?>