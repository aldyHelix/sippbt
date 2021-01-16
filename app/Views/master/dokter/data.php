 <?= $this->extend('layouts/master') ?>
 <?= $this->section('content') ?>
 <div class="card">
     <div class="card-header">
         <h3 class="card-title">Data Dokter</h3>
     </div>
     <!-- /.card-header -->
     <div class="card-body">
         <div class="row mb-4">
             <div class="col-md-6">
                 <a href="<?= route_to('dokter.create') ?>" class="btn  btn-primary btn-sm">Tambah Dokter</a>
             </div>
         </div>
         <table id="example1" class="table table-responsive table-bordered table-striped">
             <thead>
                 <tr>
                     <th>No</th>
                     <th>Nama</th>
                     <th>Jenis Kelamin</th>
                     <th>Tempat Lahir</th>
                     <th>Tanggal Lahir</th>
                     <th>No Telpon</th>
                     <th>Alamat</th>
                     <th>NIP</th>
                     <th>Opsi</th>
                 </tr>
             </thead>
             <tbody>
                 <?php $i = 1 ?>
                 <?php foreach ($data as $item) : ?>
                     <tr>
                         <td><?= $i++ ?></td>
                         <td><?= $item['nama_dokter'] ?></td>
                         <td><?= $item['jenis_kelamin'] ?></td>
                         <td><?= $item['tempat_lahir'] ?></td>
                         <td><?= $item['tanggal_lahir'] ?></td>
                         <td><?= $item['no_telpon'] ?></td>
                         <td><?= $item['alamat'] ?></td>
                         <td><?= $item['nip'] ?></td>
                         <td>
                            <a href="<?= route_to('dokter.edit', $item['id_dokter']) ?>" class="btn btn-warning btn-sm">Edit</a>
                             <a href="#" onclick="if(confirm('Apa anda yakin?')) {return getElementById('deleteData').submit()}" class="btn  btn-danger btn-sm">Hapus</a>
                         </td>
                         <form id="deleteData" action="<?= route_to('dokter.delete', $item['id_dokter']) ?>" method="post">
                             <?= csrf_field() ?>
                         </form>
                     </tr>
                 <?php endforeach ?>
             </tbody>
         </table>
     </div>
     <?= $this->endSection() ?>