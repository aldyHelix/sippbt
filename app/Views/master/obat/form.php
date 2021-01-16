 <?= $this->extend('layouts/master') ?>
 <?= $this->section('content') ?>
 <div class="card">

     <div class="card-header">
         <h3 class="card-title">Data Obat</h3>
     </div>
     <!-- /.card-header -->
     <div class="card-body">
         <form action="<?= isset($edit) ? route_to('obat.update',$obat['id_obat']) : route_to('obat.save') ?>" method="post">
             <?= csrf_field() ?>
             <div class="form-group">
                 <label for="exampleInputEmail1">Nama Obat</label>
                 <input type="text" name="nama_obat" class="form-control  <?= ($validation->hasError('nama_obat')) ? 'is-invalid' : null ?>" value="<?= old('nama_obat') ?: (isset($edit) ? $obat['nama_obat'] : null) ?>" placeholder="Masukkan Nama Obat">
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('nama_obat') ?></span>
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">Golongan Obat</label>
                 <input type="text" name="golongan_obat" class="form-control <?= ($validation->hasError('golongan_obat')) ? 'is-invalid' : null ?>" value="<?= old('golongan_obat') ?: (isset($edit) ? $obat['golongan_obat'] : null) ?>" placeholder=" Masukkan Golongan Obat">
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('golongan_obat') ?></span>
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">Jenis Obat</label>
                 <input type="text" name="jenis_obat" class="form-control <?= ($validation->hasError('jenis_obat')) ? 'is-invalid' : null ?>" value="<?= old('jenis_obat') ?: (isset($edit) ? $obat['jenis_obat'] : null) ?>" placeholder=" Masukkan Jenis Obat">
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('jenis_obat') ?></span>
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">Dosis Obat</label>
                 <input type="text" name="dosis_obat" class="form-control <?= ($validation->hasError('dosis_obat')) ? 'is-invalid' : null ?>" value="<?= old('dosis_obat') ?: (isset($edit) ? $obat['dosis_obat'] : null) ?> " placeholder=" Masukkan Dosis Obat">
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('dosis_obat') ?></span>
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">Satuan Dosis</label>
                 <input type="text" name="satuan_dosis" class="form-control <?= ($validation->hasError('satuan_dosis')) ? 'is-invalid' : null ?>" value="<?= old('satuan_dosis') ?: (isset($edit) ? $obat['satuan_dosis'] : null) ?> " placeholder=" Masukkan Satuan Dosis">
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('satuan_dosis') ?></span>
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">Satuan Obat</label>
                 <input type="text" name="satuan_obat" class="form-control <?= ($validation->hasError('satuan_obat')) ? 'is-invalid' : null ?>" value="<?= old('satuan_obat') ?: (isset($edit) ? $obat['satuan_obat'] : null) ?>" placeholder=" Masukkan Satuan Obat">
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('satuan_obat') ?></span>
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">Harga Beli</label>
                 <input type="text" name="harga_beli" class="form-control <?= ($validation->hasError('harga_beli')) ? 'is-invalid' : null ?>" value="<?= old('harga_beli') ?: (isset($edit) ? $obat['harga_beli'] : null) ?>" placeholder=" Masukkan Harga">
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('harga_beli') ?></span>
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">Sisa Obat</label>
                 <input type="text" name="sisa_obat" class="form-control <?= ($validation->hasError('sisa_obat')) ? 'is-invalid' : null ?>" value="<?= old('sisa_obat') ?: (isset($edit) ? $obat['sisa_obat'] : null) ?>" placeholder=" Jumlah Obat">
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('sisa_obat') ?></span>
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">Harga Obat</label>
                 <input type="text" name="harga_obat" class="form-control <?= ($validation->hasError('harga_obat')) ? 'is-invalid' : null ?>" value="<?= old('harga_obat') ?: (isset($edit) ? $obat['harga_obat'] : null) ?>" placeholder=" Masukkan Harga Obat">
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('harga_obat') ?></span>
             </div>
     </div>
     <div class="card-footer">
         <button type="submit" class="btn btn-primary"><?= isset($edit) ? 'Update' : 'Simpan' ?></button>
         <a href="<?= route_to('obat.index') ?>" class="btn btn-warning">Kembali</a>
     </div>
     </form>
 </div>
 <?= $this->endSection() ?>