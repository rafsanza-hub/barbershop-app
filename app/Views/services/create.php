<?= $this->extend('layouts/main.php') ?>


<!-- Content -->
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>DataTables</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Home</a></div>
            <div class="breadcrumb-item"><a href="#">Service</a></div>
            <div class="breadcrumb-item">General Elements</div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Service Registration Form</h2>
        <p class="section-lead">
            Use this form to add a new service with the necessary details.
        </p>

        <div class="card">
            <form action="<?= base_url('service/save') ?>" method="post">
                <?= csrf_field() ?>
                <div class="card-header">
                    <h4>General Elements</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Name input -->
                            <div class="form-group">
                                <label>Nama Service</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter service name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Price input -->
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="number" name="price" class="form-control" placeholder="Enter price">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Category selection -->
                            <div class="form-group">
                                <label>Category</label>
                                <select name="category_id" class="form-control">
                                    <?php foreach ($categories as $category) : ?>
                                        <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Description textarea -->
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="3" placeholder="Enter description"></textarea>
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
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<?= $this->endSection() ?>