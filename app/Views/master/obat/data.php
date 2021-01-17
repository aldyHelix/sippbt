 <?= $this->extend('layouts/master') ?>
 <?= $this->section('content') ?>
 <div class="card">
     <div class="card-header">
         <h3 class="card-title">Data Obat</h3>
     </div>
     <!-- /.card-header -->
     <div class="card-body">
         <div class="row mb-4">
             <div class="col-md-6">
                 <a href="<?= route_to('obat.create') ?>" class="btn  btn-primary btn-sm">Tambah Obat</a>
             </div>
         </div>
         <table id="example1" class="table table-responsive table-bordered table-striped">
             <thead>
                 <tr>
                     <th>No</th>
                     <th>Nama Obat</th>
                     <th>Golongan Obat</th>
                     <th>Jenis Obat</th>
                     <th>Dosis Obat</th>
                     <th>Satuan Dosis</th>
                     <th>Satuan Obat</th>
                     <th>Harga Beli</th>
                     <th>Sisa Obat</th>
                     <th>Harga Obat</th>
                     <th>Opsi</th>
                 </tr>
             </thead>
             <tbody>
                 <?php $i = 1 ?>
                 <?php foreach ($data as $item) : ?>
                     <tr>
                         <td><?= $i++ ?></td>
                         <td><?= $item['nama_obat'] ?></td>
                         <td><?= $item['golongan_obat'] ?></td>
                         <td><?= $item['jenis_obat'] ?></td>
                         <td><?= $item['dosis_obat'] ?></td>
                         <td><?= $item['satuan_dosis'] ?></td>
                         <td><?= $item['satuan_obat'] ?></td>
                         <td><?= $item['harga_beli'] ?></td>
                         <td><?= $item['sisa_obat'] ?></td>
                         <td><?= $item['harga_obat'] ?></td>
                         <td> <a href="<?= route_to('obat.edit', $item['id_obat']) ?>" class="btn btn-warning btn-sm">Edit</a>
                             <a href="#" onclick="getElementById('deleteData<?= $item['id_obat']?>').submit()" class="btn  btn-danger btn-sm">Hapus</a>
                         </td>

                         <form id="deleteData<?= $item['id_obat']?>" action="<?= route_to('obat.delete', $item['id_obat']) ?>" method="post">
                             <?= csrf_field() ?>
                             <input type="hidden" name="_method" value="DELETE">
                         </form>
                     </tr>
                 <?php endforeach ?>
             </tbody>
         </table>
     </div>
     <?= $this->endSection() ?>