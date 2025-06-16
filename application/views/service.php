<div class="container mt-3" style="width: 60%;">
    <form action="" method="post">
        <h2 class="text-center">Isi Formulir</h2>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="<?php echo set_value("nama") ?>">
            <span class="text-muted"><?php echo form_error("nama") ?></span>
        </div>
        <div class="mb-3">
            <label>Jenis Kendaraan</label>
            <select class="form-control" id="jenis_kendaraan" name="jenis_kendaraan" required>
                <option value="a">Kendaraan A</option>
                <option value="b">Kendaraan B</option>
                <option value="C">Kendaraan C</option>
                <option value="d">Kendaraan D</option>
            </select>
            <span class="text-muted"><?php echo form_error("jenis_kendaraan") ?></span>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="2" required></textarea>
            <span class="text-muted"><?php echo form_error("alamat") ?></span>
        </div>
        <div class="mb-3">
            <label>Nomor Telepon/WA</label>
            <input type="number" name="nomor_telepon" class="form-control" value="<?php echo set_value("nomor_telepon") ?>">
            <span class="text-muted"><?php echo form_error("nomor_telepon") ?></span>
        </div>
        <div class="mb-3">
            <label>Pilihan Service</label>
            <select class="form-control" id="pilih_service" name="pilih_service" required>
                <option value="a">Service A</option>
                <option value="b">Service B</option>
                <option value="C">Service C</option>
                <option value="d">Service D</option>
            </select>
            <span class="text-muted"><?php echo form_error("pilih_service") ?></span>
        </div>
        <div class="mb-3">
            <label>Pesan Kendala</label>
            <textarea class="form-control" id="pesan_kendala" name="pesan_kendala" rows="2" required></textarea>
            <span class="text-muted"><?php echo form_error("pesan_kendala") ?></span>
        </div>
        <div style="text-align: end;">
            <button class="btn btn-danger" type="submit" style="width: 20%;">Kirim</button>
        </div>
    </form>
</div>