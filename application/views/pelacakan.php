<div class="container" style="margin-bottom: 300px;">
    <h2 class="text-center mt-3">Progres Service</h2>
    <h4 class="text-center mt-5">Masukkan No. Telepon</h4>
    <form action="" method="post" style="text-align: center;">
        <input type="text" class="form-control" name="kode_service" placeholder="contoh : 0812345678" style="margin: auto; width: 60%;">
        <button type="submit" class="btn btn-danger mt-3" style="width: 10%;">Lacak</button>
    </form>

    <?php
    $step_status = [
        'masuk' => 1,
        'diagnosa' => 2,
        'perbaikan' => 3,
        'selesai' => 4
    ];

    if ($order) :
        $currentStep = isset($step_status[$order['status_orderan']]) ? $step_status[$order['status_orderan']] : 0;
    ?>

    <!-- Progres -->
    <div class="progress-tracker mt-5">
        <div class="step-group">
            <div class="icon <?php if ($currentStep >= 1) echo 'active'; ?>"><i class="fas fa-inbox"></i></div>
            <p>Diterima</p>
        </div>
        <div class="connector <?php if ($currentStep >= 2) echo 'active'; ?>"></div>
        <div class="step-group">
            <div class="icon <?php if ($currentStep >= 2) echo 'active'; ?>"><i class="fas fa-search"></i></div>
            <p>Diagnosa</p>
        </div>
        <div class="connector <?php if ($currentStep >= 3) echo 'active'; ?>"></div>
        <div class="step-group">
            <div class="icon <?php if ($currentStep >= 3) echo 'active'; ?>"><i class="fas fa-tools"></i></div>
            <p>Perbaikan</p>
        </div>
        <div class="connector <?php if ($currentStep >= 4) echo 'active'; ?>"></div>
        <div class="step-group">
            <div class="icon <?php if ($currentStep >= 4) echo 'active'; ?>"><i class="fas fa-check-circle"></i></div>
            <p>Selesai</p>
        </div>
    </div>

    <!-- Detail Customer -->
    <div class="container mt-5" style="width: 60%;">
        <h4 class="text-center mb-4">Detail Customer</h4>
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

    <?php elseif ($this->input->post('kode_service')): ?>
        <div class="alert alert-danger mt-4 text-center">Data tidak ditemukan untuk kode service: <strong><?= $this->input->post('kode_service') ?></strong></div>
    <?php endif; ?>
</div>
