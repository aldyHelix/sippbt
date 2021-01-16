 <?= $this->extend('layouts/master') ?>
 <?= $this->section('content') ?>
 <div class="card">
     <div class="card-header">
         <h3 class="card-title">Data Pasien</h3>
     </div>
     <!-- /.card-header -->
     <div class="card-body">
         <div class="row mb-4">
             <div class="col-md-6">
                 <a href="<?= route_to('pasien.create') ?>" class="btn  btn-primary btn-sm">Tambah Pasien</a>
             </div>
         </div>
         <table id="example1" class="table table-responsive table-bordered table-striped">
             <thead>
                 <tr>
                     <th>No</th>
                     <th>Nama</th>
                     <th>Jenis Kelamin</th>
                     <th>Tanggal Lahir</th>
                     <th>Alamat</th>
                     <th>Pekerjaan</th>
                     <th>NIK</th>
                     <th>Status</th>
                     <th>Golongan Darah</th>
                     <th>Opsi</th>
                 </tr>
             </thead>
             <tbody>
                 <?php $i = 1 ?>
                 <?php foreach ($data as $item) : ?>
                     <tr>
                         <td><?= $i++ ?></td>
                         <td><?= $item['nama_pasien'] ?></td>
                         <td><?= $item['jenis_kelamin'] ?></td>
                         <td><?= $item['tanggal_lahir'] ?></td>
                         <td><?= $item['alamat'] ?></td>
                         <td><?= $item['pekerjaan'] ?></td>
                         <td><?= $item['nik'] ?></td>
                         <td><?= $item['status'] ?></td>
                         <td><?= $item['gol_darah'] ?></td>
                         <td><a href="<?= route_to('pasien.edit', $item['id_pasien']) ?>" class="btn btn-warning btn-sm">Edit</a>
                             <a href="#" onclick="if(confirm('Apa anda yakin?')) {return getElementById('deleteData').submit()}" class="btn  btn-danger btn-sm">Hapus</a>
                         </td>
                         <form id="deleteData" action="<?= route_to('pasien.delete', $item['id_pasien']) ?>" method="post">
                             <?= csrf_field() ?>
                         </form>
                     </tr>
                 <?php endforeach ?>
             </tbody>
         </table>
     </div>
     <?= $this->endSection() ?>