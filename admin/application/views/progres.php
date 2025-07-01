<?php
$tanggal = '2025-06-01 12:30:00';
?>

<!-- Main Content -->
<div class="container my-4">
  <h1 class="text-center mb-4">Data Servis Masuk</h1>
  <div>
    <table class="w-100 table table-borderless table-striped text-center" id="tabelku">
      <thead>
        <tr>
          <th scope="col">Tanggal Pesan</th>
          <th scope="col">Nama Customer</th>
          <th scope="col">Pilihan Servis</th>
          <th scope="col">Jenis Kendaraan</th>
          <th scope="col">Opsi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($order as $key => $value) : ?>
          <tr>
            <td><?php echo date('d F Y H:i', strtotime($tanggal)); ?></td>
            <td><?php echo $value['nama'] ?></td>
            <td><?php echo $value['pilihan_servis']; ?></td>
            <td><?php echo $value['jenis_kendaraan']; ?></td>
            <td>
              <a href="<?php echo base_url('progres/detail/' . $value['id_order']); ?>" 
                 class="btn btn-danger text-white">Detail</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>