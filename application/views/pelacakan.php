<div class="container">
    <h2 class="text-center mt-3">Progres Service</h2>
    <h4 class="text-center mt-5">Input Kode Service</h4>
    <form action="" method="post" style="text-align: center;">
        <input type="text" class="form-control" name="kode_service" style="margin: auto; width: 60%;">
        <button type="submit" class="btn btn-danger mt-3" style=" width: 10%;">Lacak</button>
    </form>

    <?php
    // Simulasi status dari backend (misalnya dari database)
    $status = 'perbaikan'; // Ganti dengan nilai aktual dari database: 'diterima', 'diagnosa', 'perbaikan', 'selesai'

    $step_status = [
        'diterima' => 1,
        'diagnosa' => 2,
        'perbaikan' => 3,
        'selesai' => 4
    ];

    $currentStep = isset($step_status[$status]) ? $step_status[$status] : 0;
    ?>

    <div class="progress-tracker">
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

    <div class="container mt-5" style="width: 60%;">
        <h4 class="text-center mb-4">Detail Customer</h4>

        <div style="margin: auto;">
            <div class="row mb-2">
                <div class="col-md-3 fw-bold">Nama</div>
                <div class="col-md-9">: Ahmad Surya</div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3 fw-bold">Alamat</div>
                <div class="col-md-9">: Jl. Melati No. 45, Sleman, Yogyakarta</div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3 fw-bold">No Telepon / WA</div>
                <div class="col-md-9">: 081234567890</div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3 fw-bold">Jenis Kendaraan</div>
                <div class="col-md-9">: Honda Jazz RS 2019</div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3 fw-bold">Pilihan Service</div>
                <div class="col-md-9">: Ganti Radiator + Cek Sistem Pendingin</div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3 fw-bold">Pesan Kendala</div>
                <div class="col-md-9">: Mesin cepat panas saat macet, air radiator sering habis</div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3 fw-bold">Kode Service</div>
                <div class="col-md-9">: SRV20250612-001</div>
            </div>
        </div>
    </div>



</div>