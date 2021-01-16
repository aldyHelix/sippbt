 <?= $this->extend('layouts/master') ?>
 <?= $this->section('content') ?>
 <div class="card">

     <div class="card-header">
         <h3 class="card-title">Data Dokter</h3>
     </div>
     <!-- /.card-header -->
     <div class="card-body">
         <form action="<?= isset($edit) ? route_to('dokter.update', $dokter['id_dokter']) : route_to('dokter.save') ?>" method="post">
             <?= csrf_field() ?>
             <div class="form-group">
                 <label for="exampleInputEmail1">Nama</label>
                 <input type="text" name="nama_dokter" class="form-control <?= ($validation->hasError('nama_dokter')) ? 'is-invalid' : null ?>" value="<?= old('nama_dokter') ?: (isset($edit) ? $dokter['nama_dokter'] : null) ?>" placeholder="Masukkan Nama" autofocus>
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('nama_dokter') ?></span>
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">Tempat Lahir</label>
                 <input type="text" name="tempat_lahir" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : null ?>" value="<?= old('tempat_lahir') ?: (isset($edit) ? $dokter['tempat_lahir'] : null) ?>" placeholder="Masukkan Tempat Lahir" autofocus>
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('tempat_lahir') ?></span>
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">Tanggal Lahir</label>
                 <input type="date" name="tanggal_lahir" class="form-control <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid' : null ?>" value="<?= old('tanggal_lahir') ?: (isset($edit) ? $dokter['tanggal_lahir'] : null) ?>" placeholder=" Masukkan Tanggal Lahir" autofocus>
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">Jenis Kelamin</label>
                 <div class="form-check ml-3">
                     <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki">
                     <label class="form-check-label">Laki-Laki</label>
                 </div>
                 <div class="form-check ml-3">
                     <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan">
                     <label class="form-check-label">Perempuan</label>
                 </div>
             </div>
             <div class="form-group">
                 <label>Alamat</label>
                 <textarea class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : null ?>" value="<?= old('alamat') ?: (isset($edit) ? $dokter['alamat'] : null) ?>" rows=" 2" name="alamat" placeholder="Tulis Alamat" autofocus></textarea>
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('alamat') ?></span>
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">No Telepon</label>
                 <input type="number" name="no_telpon" class="form-control <?= ($validation->hasError('no_telpon')) ? 'is-invalid' : null ?>" value="<?= old('no_telpon') ?: (isset($edit) ? $dokter['no_telpon'] : null) ?> " placeholder="Masukkan No Telepon" autofocus>
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('no_telpon') ?></span>
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">NIP</label>
                 <input type="number" name="nip" class="form-control <?= ($validation->hasError('nip')) ? 'is-invalid' : null ?>" value="<?= old('nip') ?: (isset($edit) ? $dokter['nip'] : null) ?> " placeholder="Masukkan NIP" autofocus>
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('nip') ?></span>
             </div>
     </div>
     <div class="card-footer">
         <button type="submit" class="btn btn-primary"><?= isset($edit) ? 'Update' : 'Simpan' ?></button>
         <a href="<?= route_to('dokter.index') ?>" class="btn btn-warning">Kembali</a>
     </div>
 </div>

 </div>
 <?= $this->endSection() ?>