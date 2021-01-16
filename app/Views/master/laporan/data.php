 <?= $this->extend('layouts/master') ?>
 <?= $this->section('content') ?>
 <div class="card">
     <div class="card-header">
         <h3 class="card-title">Data Laporan</h3>
     </div>
     <!-- /.card-header -->
     <div class="card-body">
         <div class="row mb-4">
             <div class="col-md-6">
                 <a href="<?= route_to('laporan.create') ?>" class="btn  btn-primary btn-sm">Tambah Laporan</a>
             </div>
         </div>
         <table id="example1" class="table table-responsive table-bordered table-striped">
             <thead>
                 <tr>
                     <th>No</th>
                     <th>No Pendaftaran</th>
                     <th>Nama Pasien</th>
                     <th>Jenis Kelamin</th>
                     <th>Umur</th>
                     <th>Alamat</th>
                     <th>Pekerjaan</th>
                     <th>Poli</th>
                     <th>Nama Dokter</th>
                     <th>Tanggal</th>
                     <th>Hasil Diagnosa</th>
                     <th>Nama Obat</th>
                     <th>Dosis Obat</th>
                     <th>Satuan Dosis</th>
                     <th>No Rekam Medis</th>
                     <th>Harga Obat</th>
                 </tr>
             </thead>
             <tbody>
                 <?php $i = 1 ?>
                 <?php foreach ($data as $item) : ?>
                     <tr>
                         <td><?= $i++ ?></td>
                         <td><?= $item['nama_pasien'] ?></td>
                         <td><?= $item['nik'] ?></td>
                         <td><?= $item['jenis_kelamin'] ?></td>
                         <td><?= $item['tanggal_lahir'] ?></td>
                         <td><?= $item['alamat'] ?></td>
                         <td><?= $item['pekerjaan'] ?></td>
                         <td><?= $item['gol_darah'] ?></td>
                         <td><?= $item['pelayanan'] ?></td>
                         <td><?= $item['poli'] ?></td>
                         <td><?= $item['keluhan']  ?></td>
                         <td><?= $item['nama_dokter'] ?></td>
                         <td><?= $item['tanggal']  ?></td>
                         <td><a href="<?= route_to('laporan.edit', $item['id_laporan']) ?>" class="btn btn-warning btn-sm">Edit</a>
                             <a href="#" onclick="if(confirm('Apa anda yakin?')) {return getElementById('deleteData').submit()}" class="btn  btn-danger btn-sm">Hapus</a>
                         </td>
                         <form id="deleteData" action="<?= route_to('laporan.delete', $item['id_laporan']) ?>" method="post">
                             <?= csrf_field() ?>
                         </form>
                     </tr>
                 <?php endforeach ?>
             </tbody>
         </table>
     </div>
     <?= $this->endSection() ?>