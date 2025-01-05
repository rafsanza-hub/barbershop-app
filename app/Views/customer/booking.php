<?= $this->extend('customer/layouts/main.php') ?>

<!-- Content -->
<?= $this->section('content') ?>
<section class="section">
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Book Your Appointment</h4>
                            </div>
                            <div class="card-body">
                                <div class="row mt-4">
                                    <div class="col-12 col-lg-8 offset-lg-2">
                                        <div class="wizard-steps">
                                            <div class="wizard-step" id="step-1-step">
                                                <div class="wizard-step-icon">
                                                    <i class="fas fa-id-card"></i>
                                                </div>
                                                <div class="wizard-step-label">
                                                    Data Diri
                                                </div>
                                            </div>
                                            <div class="wizard-step" id="step-2-step">
                                                <div class="wizard-step-icon">
                                                    <i class="fas fa-user-tie"></i>
                                                </div>
                                                <div class="wizard-step-label">
                                                    Barber
                                                </div>
                                            </div>
                                            <div class="wizard-step" id="step-3-step">
                                                <div class="wizard-step-icon">
                                                    <i class="fas fa-cut"></i>
                                                </div>
                                                <div class="wizard-step-label">
                                                    Service
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form action="<?= base_url('customer/booking/save') ?>" method="post" id="bookingForm" class="wizard-content mt-2">
                                    <!-- Step 1: Data Diri -->
                                    <div class="wizard-pane" id="data-diri">
                                        <div class="form-group row align-items-center">
                                            <label class="col-md-4 text-md-right text-left">Full Name</label>
                                            <div class="col-lg-4 col-md-6">
                                                <input type="text" name="fullname" class="form-control" id="name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-md-4 text-md-right text-left">No Telephone</label>
                                            <div class="col-lg-4 col-md-6">
                                                <input type="number" name="phone-number" class="form-control" id="phone-number" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 text-md-right text-left mt-2">Address</label>
                                            <div class="col-lg-4 col-md-6">
                                                <textarea class="form-control" name="address" id="address" required></textarea>
                                            </div>
                                        </div>
                                        <!-- Waktu yang diinginkan -->
                                        <div class="form-group row">
                                            <label class="col-md-4 text-md-right text-left mt-2">Select Time</label>
                                            <div class="col-lg-4 col-md-6">
                                                <input type="time" name="time" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4"></div>
                                            <div class="col-lg-4 col-md-6 text-right">
                                                <button type="button" class="btn btn-icon icon-right btn-primary" id="next-to-barber">Next <i class="fas fa-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Step 2: Barber yang Dipilih -->
                                    <div class="wizard-pane" id="barber" style="display:none;">
                                        <div class="form-group row">
                                            <label class="col-md-4 text-md-right text-left mt-2">Choose Barber</label>
                                            <div class="col-lg-4 col-md-6">
                                                <select name="barber" id="barberSelect" class="form-control" required>
                                                    <?php foreach ($barbers as $barber) : ?>
                                                        <option value="<?= $barber['id'] ?>"><?= $barber["fullname"] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-1 col-sm-6">
                                                <button type="button" class="btn btn-secondary back-button" id="back-to-data-diri"><i class="fas fa-arrow-left"></i> Back</button>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 text-right">
                                                <button type="button" class="btn btn-icon icon-right btn-primary" id="next-to-service">Next <i class="fas fa-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Step 3: Service yang Dipilih -->
                                    <div class="wizard-pane" id="service" style="display:none;">

                                        <div class="form-group row">
                                            <label class="col-md-4 text-md-right text-left mt-2">Service</label>
                                            <div class="col-lg-4 col-md-6">
                                                <select name="service" id="serviceSelect" class="form-control" required>
                                                    <?php foreach ($services as $service) : ?>
                                                        <option value="<?= $service["id"] ?>"><?= $service["name"] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-1 col-sm-6">
                                                <button type="button" class="btn btn-secondary back-button" id="back-to-barber"><i class="fas fa-arrow-left"></i> Back</button>
                                            </div>
                                            <div class="col-lg-4 col-md-6 text-right col-sm-6">
                                                <button type="submit" class="btn btn-icon icon-right btn-primary">Submit <i class="fas fa-check"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-whitesmoke">
                BarberKing - Where your best look begins.
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    $(document).ready(function() {
        var currentStep = 'data-diri';

        // Inisialisasi tampilan awal
        function initializeSteps() {
            // Set active step berdasarkan pane yang visible
            if ($('#data-diri').is(':visible')) {
                setStepActive('step-1-step');
            } else if ($('#barber').is(':visible')) {
                setStepActive('step-2-step');
            } else if ($('#service').is(':visible')) {
                setStepActive('step-3-step');
            }
        }

        // Set active state untuk single step
        function setStepActive(stepId) {
            $('.wizard-step').removeClass('wizard-step-active');
            $('#' + stepId).addClass('wizard-step-active');
        }

        // Fungsi untuk pindah ke step tertentu
        function goToStep(step) {
            $('.wizard-pane').hide();
            $('#' + step).show();

            // Map step names to step IDs
            const stepMap = {
                'data-diri': 'step-1-step',
                'barber': 'step-2-step',
                'service': 'step-3-step'
            };

            setStepActive(stepMap[step]);
            currentStep = step;
        }

        // Call initialize pada load
        initializeSteps();

        $('#next-to-barber').click(function() {
            var name = $('#name').val();
            var phoneNumber = $('#phone-number').val();
            var address = $('#address').val();

            if (name && phoneNumber && address) {
                goToStep('barber');
            } else {
                alert('Please fill in all fields');
            }
        });

        $('#next-to-service').click(function() {
            var barberSelected = $('#barberSelect').val();

            if (barberSelected) {
                goToStep('service');
            } else {
                alert('Please select a barber');
            }
        });

        // Perbaikan navigasi back button
        $('.back-button').click(function() {
            // Tentukan step sebelumnya berdasarkan currentStep
            var previousStep;

            if (currentStep === 'service') {
                previousStep = 'barber';
            } else if (currentStep === 'barber') {
                previousStep = 'data-diri';
            }

            if (previousStep) {
                goToStep(previousStep);
            }
        });
    });
</script>



<?= $this->endSection() ?>