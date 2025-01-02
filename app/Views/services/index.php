<?= $this->extend('layouts/main.php') ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="<?= base_url() ?>assets/modules/datatables/datatables.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">

<link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
<style>
    .truncate {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 150px;
        
    }
</style>
<?= $this->endSection() ?>
<!-- Content -->
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Service Table</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Components</a></div>
            <div class="breadcrumb-item">Service</div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Manage Your Services</h2>
        <p class="section-lead">Here you can view and manage the service data.</p>
        <div class="row">
            <div class="col-12">
                <!-- Card Component -->
                <div class="card">
                    <div class="card-header">
                        <h4>Service Data</h4>
                        <div class="card-header-form">
                            <a href="<?= base_url('service/create') ?>" class="btn btn-primary">Tambah Service</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <!-- Service Table -->
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($services as $service) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $service['name'] ?></td>
                                            <td class="truncate"><?= $service['description'] ?></td>
                                            <td><?= $service['price'] ?></td>
                                            <td><?= $service['category_name'] ?></td>
                                            <td>
                                                <form action="<?= base_url('service/delete/' . $service['id']) ?>" method="post" class="d-inline">
                                                    <?= csrf_field() ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                                <a href="<?= base_url('service/edit/' . $service['id']) ?>" class="btn btn-secondary btn-sm btn-edit">Edit</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End of Card -->
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>


<?= $this->section('script') ?>
<script src="<?= base_url() ?>assets/modules/datatables/datatables.min.js"></script>
<script src="<?= base_url() ?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="<?= base_url() ?>assets/modules/izitoast/js/iziToast.min.js"></script>
<script>
    $(function() {
        $("#table-1 ").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });

    <?php if (session('success')) : ?>
        toastr.success('<?= session('success') ?>', 'Sukses', {
            closeButton: true,
            progressBar: true,
            positionClass: "toast-top-right",
            timeOut: 3000
        });
    <?php endif; ?>
</script>
<?= $this->endSection() ?>