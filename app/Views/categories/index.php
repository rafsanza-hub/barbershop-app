<?= $this->extend('layouts/main.php') ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="<?= base_url() ?>assets/modules/datatables/datatables.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/modules/toastr/toastr.min.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Category Table</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Components</a></div>
            <div class="breadcrumb-item">Category</div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Category List</h2>
        <p class="section-lead">Manage your categories here.</p>
        <div class="row">
            <div class="col-12">
                <!-- Message Block -->
                <?= $this->include('auth/_message_block.php') ?>

                <!-- Card Component -->
                <div class="card">
                    <div class="card-header">
                        <h4>Category Data</h4>
                        <div class="card-header-form">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                                Tambah Kategori
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <!-- Category Table -->
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($categories as $category) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $category["name"] ?></td>
                                            <td>
                                                <form action="<?= base_url('category/delete/' . $category['id']) ?>" method="post" class="d-inline">
                                                    <?= csrf_field() ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                                </form>
                                                <button type="button" class="btn btn-secondary btn-sm btn-edit"
                                                    data-toggle="modal"
                                                    data-id="<?= $category['id'] ?>"
                                                    data-name="<?= $category['name'] ?>">
                                                    Edit
                                                </button>
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



<!--****  TAMBAH MODAL ***-->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('category/save') ?>" method="post">
                    <label for="name">Nama</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!--**** EDIT MODAL ***-->
<div class="modal fade" id="modal-edit">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('category/save') ?>" method="post" id="editCategoryForm">
                    <label for="name">Nama</label>
                    <input type="text" name="name" id="categoryName" class="form-control">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<?= $this->endSection() ?>


<?= $this->section('script') ?>
<script src="<?= base_url() ?>assets/modules/datatables/datatables.min.js"></script>
<script src="<?= base_url() ?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="<?= base_url() ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>

<script src="<?= base_url() ?>assets/modules/toastr/toastr.min.js"></script>
<script>
    $(function() {
        $("#table-1").DataTable({
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


    $(document).on('click', '.btn-edit', function() {
        let categoryId = $(this).data('id');
        let categoryName = $(this).data('name');


        // Isi data di modal
        $('#categoryName').val(categoryName);
        $('#editCategoryForm').attr('action', '/category/update/' + categoryId);

        // Tampilkan modal
        $('#modal-edit').modal('show');
    });
</script>

<?= $this->endSection() ?>