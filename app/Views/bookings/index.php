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
        <h1>Booking Table</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Components</a></div>
            <div class="breadcrumb-item">Booking</div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Manage Your Bookings</h2>
        <p class="section-lead">Here you can view and manage your booking data.</p>
        <div class="row">
            <div class="col-12">
                <!-- Message Block -->
                <?= $this->include('auth/_message_block.php') ?>

                <!-- Card Component -->
                <div class="card">
                    <div class="card-header">
                        <h4>Booking Data</h4>
                        <div class="card-header-form">
                            <a href="<?= base_url('booking/create') ?>" class="btn btn-primary">Tambah booking</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <!-- Booking Table -->
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Book Id</th>
                                        <th>Customer</th>
                                        <th>Barber</th>
                                        <th>Service</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($bookings as $booking) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $booking['id'] ?></td>
                                            <td><?= $booking['customer_name'] ?></td>
                                            <td><?= $booking['barber_name'] ?></td>
                                            <td><?= $booking['service_name'] ?></td>
                                            <td><?= $booking['date'] ?></td>
                                            <td><?= $booking['time'] ?></td>
                                            <td>
                                                <form action="<?= base_url('booking/delete/' . $booking['id']) ?>" method="post" class="d-inline">
                                                    <?= csrf_field() ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                                </form>
                                                <a href="<?= base_url('booking/edit/' . $booking['id']) ?>" class="btn btn-secondary btn-sm btn-edit">Edit</a>
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
<script src="../../plugins/toastr/toastr.min.js"></script>
<script>
    $(function() {
        $("#example1").DataTable({
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