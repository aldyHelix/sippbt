 <?= $this->extend('layouts/master') ?>
 <?= $this->section('content') ?>
 <div class="card">

     <div class="card-header">
         <h3 class="card-title">Data Pasien</h3>
     </div>
     <!-- /.card-header -->
     <div class="card-body">
         <form action="<?= isset($edit) ? route_to('pasien.update', $pasien['id_pasien']) : route_to('pasien.save') ?>" method="post">
             <?= csrf_field() ?>
             <div class="form-group">
                 <label for="exampleInputEmail1">Nama</label>
                 <input type="text" name="nama_pasien" class="form-control <?= ($validation->hasError('nama_pasien')) ? 'is-invalid' : null ?>" value="<?= old('nama_pasien') ?: (isset($edit) ? $pasien['nama_pasien'] : null) ?>" placeholder="Masukkan Nama" autofocus>
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('nama_pasien') ?></span>
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">NIK</label>
                 <input type="number" name="nik" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : null ?>" value="<?= old('nik') ?: (isset($edit) ? $pasien['nik'] : null) ?>" placeholder=" Masukkan NIK" autofocus>
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('nik') ?></span>
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">Tempat Lahir</label>
                 <input type="text" name="tempat_lahir" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : null ?>" value="<?= old('tempat_lahir') ?: (isset($edit) ? $pasien['tempat_lahir'] : null) ?>" placeholder=" Masukkan Tempat Lahir" autofocus>
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('tempat_lahir') ?></span>
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">Tanggal Lahir</label>
                 <input type="date" name="tanggal_lahir" class="form-control <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid' : null ?>" value="<?= old('tanggal_lahir') ?: (isset($edit) ? $pasien['tanggal_lahir'] : null) ?>" placeholder=" Masukkan Tanggal Lahir">
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('tanggal_lahir') ?></span>
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">Jenis Kelamin</label>
                 <div class="form-check ml-3">
                     <input class="form-check-input <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : null ?>" type="radio" name="jenis_kelamin" value="laki-laki">
                     <label class="form-check-label">Laki-Laki</label>
                 </div>
                 <div class="form-check ml-3">
                     <input class="form-check-input <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : null ?>" type="radio" name="jenis_kelamin" value="perempuan">
                     <label class="form-check-label">Perempuan</label>
                 </div>
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('jenis_kelamin') ?></span>
             </div>
             <div class="form-group">
                 <label>Alamat</label>
                 <textarea class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : null ?>" value="<?= old('alamat') ?: (isset($edit) ? $pasien['alamat'] : null) ?>" rows="2" name="alamat" placeholder="Tulis Alamat" autofocus></textarea>
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('alamat') ?></span>
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">Pekerjaan</label>
                 <input type="text" name="pekerjaan" class="form-control <?= ($validation->hasError('pekerjaan')) ? 'is-invalid' : null ?>" value="<?= old('pekerjaan') ?: (isset($edit) ? $pasien['pekerjaan'] : null) ?>" placeholder="Masukkan Pekerjaan" autofocus>
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('pekerjaan') ?></span>
             </div>
             <div class="form-group">
                 <label>Status</label>
                 <select class="form-control <?= ($validation->hasError('status')) ? 'is-invalid' : null ?>" name="status">
                     <option value="-">-</option>
                     <option value="belum_kawin">Belum Kawin</option>
                     <option value="kawin">Kawin</option>
                     <option value="janda">Janda</option>
                     <option value="duda">Duda</option>
                 </select>
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('status') ?></span>
             </div>
             <div class="form-group">
                 <label>Golongan Darah</label>
                 <select class="form-control <?= ($validation->hasError('gol_darah')) ? 'is-invalid' : null ?>" name="gol_darah">
                     <option value="-">-</option>
                     <option value="a">A</option>
                     <option value="b">B</option>
                     <option value="ab">AB</option>
                     <option value="o">O</option>
                 </select>
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('gol_darah') ?></span>
             </div>
     </div>
     <div class="card-footer">
         <button type="submit" class="btn btn-primary"><?= isset($edit) ? 'Update' : 'Simpan' ?></button>
         <a href="<?= route_to('pasien.index') ?>" class="btn btn-warning">Kembali</a>
     </div>
 </div>
 <?= $this->endSection() ?>