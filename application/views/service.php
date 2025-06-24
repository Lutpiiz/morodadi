<div class="container mt-3" style="width: 60%;">
    <form action="<?php echo base_url('service/proses') ?>" method="post">
        <h2 class="text-center">Isi Formulir</h2>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="<?php echo set_value("nama") ?>" required>
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
            <input type="number" name="no_telepon" class="form-control" value="<?php echo set_value("no_telepon") ?>" required>
            <span class="text-muted"><?php echo form_error("no_telepon") ?></span>
        </div>
        <div class="mb-3">
            <label>Pilihan Servis</label>
            <select class="form-control" id="pilihan_servis" name="pilihan_servis" required>
                <option value="a">Service A</option>
                <option value="b">Service B</option>
                <option value="C">Service C</option>
                <option value="d">Service D</option>
            </select>
            <span class="text-muted"><?php echo form_error("pilihan_servis") ?></span>
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