<div class="container" style="margin-bottom: 300px;">
    <h2 class="text-center mt-3">Progres Service</h2>
    <h4 class="text-center mt-5">Masukkan No. Telepon</h4>
    <form action="" method="post" style="text-align: center;">
        <input type="text" class="form-control" name="kode_service" placeholder="contoh : 0812345678" style="margin: auto; width: 60%;">
        <button type="submit" class="btn btn-danger mt-3" style="width: 10%;">Lacak</button>
    </form>

    <?php
    $step_status = [
        'tunggu' => 1,
        'masuk' => 2,
        'diagnosa' => 3,
        'perbaikan' => 4,
        'selesai' => 5
    ];

    if ($order) :
        $currentStep = isset($step_status[$order['status_orderan']]) ? $step_status[$order['status_orderan']] : 0;
    ?>



        <div class="bg-light mt-3 py-4 px-4 m-auto shadow" style="width: 1000px; border-radius: 20px;">
            <h4 class="text-center mb-4">Detail Servis Anda</h4>
            <!-- Progres -->
            <div class="progress-tracker mt-4">
                <div class="step-group">
                    <div class="icon <?php if ($currentStep >= 1) echo 'active'; ?>"><i class="fas fa-spinner"></i></div>
                    <p>Menunggu</p>
                </div>
                <div class="connector <?php if ($currentStep >= 2) echo 'active'; ?>"></div>
                <div class="step-group">
                    <div class="icon <?php if ($currentStep >= 2) echo 'active'; ?>"><i class="fas fa-arrow-right-to-bracket"></i></div>
                    <p>Diterima</p>
                </div>
                <div class="connector <?php if ($currentStep >= 3) echo 'active'; ?>"></div>
                <div class="step-group">
                    <div class="icon <?php if ($currentStep >= 3) echo 'active'; ?>"><i class="fas fa-search"></i></div>
                    <p>Diagnosa</p>
                </div>
                <div class="connector <?php if ($currentStep >= 4) echo 'active'; ?>"></div>
                <div class="step-group">
                    <div class="icon <?php if ($currentStep >= 4) echo 'active'; ?>"><i class="fas fa-tools"></i></div>
                    <p>Perbaikan</p>
                </div>
                <div class="connector <?php if ($currentStep >= 5) echo 'active'; ?>"></div>
                <div class="step-group">
                    <div class="icon <?php if ($currentStep >= 5) echo 'active'; ?>"><i class="fas fa-check-circle"></i></div>
                    <p>Selesai</p>
                </div>
            </div>

            <!-- Detail Customer -->
            <?php
            $estimasi_waktu = '';
            $biaya = '';

            if ($order['status_orderan'] == 'tunggu') {
                $estimasi_waktu = 'Menunggu customer mengirim radiator';
            } elseif ($order['status_orderan'] == 'masuk') {
                $estimasi_waktu = '2 Jam';
            } elseif ($order['status_orderan'] == 'diagnosa') {
                $estimasi_waktu = '1 Jam 30 Menit';
            } elseif ($order['status_orderan'] == 'perbaikan') {
                $estimasi_waktu = '1 Jam';
            } else {
                $estimasi_waktu = 'Radiator anda sudah bisa diambil';
            }

            if ($order['pilihan_servis'] == 'Korok') {
                $biaya = 'Rp. 150.000';
            } elseif ($order['pilihan_servis'] == 'Tambal Bocor') {
                $biaya = 'Rp. 150.000 - Rp. 200.000';
            } elseif ($order['pilihan_servis'] == 'Ganti Tank') {
                $biaya = 'Rp. 500.000 - Rp. 1.000.000';
            } elseif ($order['pilihan_servis'] == 'Ganti Core') {
                $biaya = 'Rp. 80.000 - Rp. 240.000';
            }

            ?>
            <div class="container mt-4">
                <div class="row mb-2">
                    <div class="col-md-3 fw-bold">Estimasi Pengerjaan</div>
                    <div class="col-md-9">: <?php echo $estimasi_waktu ?></div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-3 fw-bold">Estimasi Biaya</div>
                    <div class="col-md-9">: <?php echo $biaya ?></div>
                </div>

                <div style="margin: auto;">
                    <div class="row mb-2">
                        <div class="col-md-3 fw-bold">Nama</div>
                        <div class="col-md-9">: <?= $order['nama'] ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-3 fw-bold">Alamat</div>
                        <div class="col-md-9">: <?= $order['alamat'] ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-3 fw-bold">No Telepon / WA</div>
                        <div class="col-md-9">: <?= $order['no_telepon'] ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-3 fw-bold">Jenis Kendaraan</div>
                        <div class="col-md-9">: <?= $order['jenis_kendaraan'] ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-3 fw-bold">Pilihan Service</div>
                        <div class="col-md-9">: <?= $order['pilihan_servis'] ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-3 fw-bold">Pesan Kendala</div>
                        <div class="col-md-9">: <?= $order['pesan_kendala'] ?></div>
                    </div>
                </div>
            </div>
        </div>

    <?php elseif ($this->input->post('kode_service')): ?>
        <div class="alert alert-danger mt-4 text-center">Data tidak ditemukan untuk kode service: <strong><?= $this->input->post('kode_service') ?></strong></div>
    <?php endif; ?>
</div>