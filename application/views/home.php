<style>
  /* Card styling */
  .card {
    border-radius: 10px;
    overflow: hidden;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 300px;
  }

  .card:hover {
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    transform: translateY(-5px);
    border: 2px solid #ff0000;
    background-color: #ff0000;
    color: white;
  }

  /* Image styling */
  .card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
  }

  /* Card body styling */
  .card-body {
    padding: 15px;
    background-color: #fff;
  }

  /* Title styling */
  .card-body h6 {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 10px;
    color: #333;
  }

  /* Price styling */
  .card-body p {
    font-size: 18px;
    color: #007bff;
    font-weight: 500;
  }
</style>

<div class="mb-5">
  <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="" width="100%">
</div>

<div class="container">
  <div class="row">
    <div class="col">
      <h2></h2>
      <h3 style="color: red; font-weight: bold;">Pentingnya Merawat Sistem Pendingin Mesin</h3>
      <p class="my-2">
        Perawatan penting untuk menjaga sistem pendingin kendaraan tetap optimal. Layanan ini mencakup pemeriksaan kebocoran, pembersihan radiator dari kotoran dan kerak, penggantian cairan pendingin (coolant), serta pengecekan kipas dan selang pendingin. Perawatan radiator membantu mencegah overheating, meningkatkan performa mesin, dan memperpanjang usia komponen kendaraan. Dilakukan secara rutin, service ini juga mengurangi risiko kerusakan serius yang dapat menghabiskan biaya besar di masa depan. Pastikan radiator kendaraan Anda selalu dalam kondisi prima untuk kenyamanan dan keamanan berkendara.
      </p>
    </div>
    <div class=" text-center mb-5 col">
      <img src="<?php echo base_url('assets/images/radiator1.jpeg') ?>" style="border-radius: 30px; width: 400px; width: 70%;">
    </div>
  </div>
</div>

