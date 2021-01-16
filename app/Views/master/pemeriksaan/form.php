 <?= $this->extend('layouts/master') ?>
 <?= $this->section('content') ?>
 <div class="card">
     <div class="card-header">
         <h3 class="card-title">Data Pemeriksaan</h3>
     </div>
     <!-- /.card-header -->
     <div class="card-body">
         <form action="<?= isset($edit) ? route_to('pemeriksaan.update', $pendaftaran['id_pemeriksaan']) : route_to('pemeriksaan.save') ?>" method="post">
             <?= csrf_field() ?>
             <div class="form-group">
                 <label for="exampleInputEmail1">Nama Pasien</label>
                 <input type="text" name="nama pasien" class="form-control <?= ($validation->hasError('nama_pasien')) ? 'is-invalid' : null ?>" value="<?= old('nama_pasien') ?: (isset($edit) ? $pendaftaran['nama_pasien'] : null) ?>" placeholder="Masukkan Nama Pasien" autofocus>
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('nama_pasien') ?></span>
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">NIK</label>
                 <input type="number" name="nik" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : null ?>" value="<?= old('nik') ?: (isset($edit) ? $pendaftaran['nik'] : null) ?>" placeholder="Masukkan NIK" autofocus>
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('nik') ?></span>
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
                 <label for="exampleInputEmail1">Tanggal Lahir</label>
                 <input type="date" name="tanggal lahir" class="form-control <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid' : null ?>" value="<?= old('tanggal_lahir') ?: (isset($edit) ? $pendaftaran['tanggal_lahir'] : null) ?>" placeholder="Masukkan Tanggal Lahir">
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('tanggal_lahir') ?></span>
             </div>
             <div class="form-group">
                 <label>Alamat</label>
                 <textarea class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : null ?>" value="<?= old('alamat') ?: (isset($edit) ? $pendaftaran['alamat'] : null) ?>" rows="2" name="alamat" placeholder="Tulis Alamat" autofocus></textarea>
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('alamat') ?></span>
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">Pekerjaan</label>
                 <input type="text" name="pekerjaan" class="form-control <?= ($validation->hasError('pekerjaan')) ? 'is-invalid' : null ?>" value="<?= old('pekerjaan') ?: (isset($edit) ? $pendaftaran['pekerjaan'] : null) ?>" placeholder="Masukkan Pekerjaan">
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('pekerjaan') ?></span>
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
             <div class="form-group">
                 <label>Pilih Pelayanan</label>
                 <select class="form-control <?= ($validation->hasError('pelayanan')) ? 'is-invalid' : null ?>" name="pelayanan">
                     <option value="-">-</option>
                     <option value="bpjs">BPJS</option>
                     <option value="umum">Umum</option>
                 </select>
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('pelayanan') ?></span>
             </div>
             <div class="form-group">
                 <label>Poli</label>
                 <select class="form-control <?= ($validation->hasError('poli')) ? 'is-invalid' : null ?>" name="poli">
                     <option value="-">-</option>
                     <option value="poli_umum">Poli Umum</option>
                     <option value="poli_gigi">Poli Gigi</option>
                     <option value="poli_kia/kb">Poli KIA/KB</option>
                     <option value="surat_keterangan_dokter">Surat Keterangan Dokter</option>
                     <option value="surat_rujukan_dokter">Surat Rujukan Dokter</option>
                 </select>
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('poli') ?></span>
             </div>
             <div class="form-group">
                 <label>Keluhan</label>
                 <textarea class="form-control <?= ($validation->hasError('keluhan')) ? 'is-invalid' : null ?>" value="<?= old('keluhan') ?: (isset($edit) ? $pendaftaran['keluhan'] : null) ?>" rows="2" name="keluhan" placeholder="Tulis Keluhan" autofocus></textarea>
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('keluhan') ?></span>
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">Nama Dokter</label>
                 <input type="text" name="nama_dokter" class="form-control <?= ($validation->hasError('nama_dokter')) ? 'is-invalid' : null ?>" value="<?= old('nama_dokter') ?: (isset($edit) ? $dokter['nama_dokter'] : null) ?>" placeholder="Masukkan Nama" autofocus>
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('nama_dokter') ?></span>
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">Tanggal</label>
                 <input type="date" name="tanggal" class="form-control <?= ($validation->hasError('tanggal')) ? 'is-invalid' : null ?>" value="<?= old('tanggal_lahir') ?: (isset($edit) ? $pendaftaran['tanggal_lahir'] : null) ?>" placeholder="Masukkan Tanggal Lahir">
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('tanggal') ?></span>
             </div>
     </div>
     <div class="card-footer">
         <button type="submit" class="btn btn-primary"><?= isset($edit) ? 'Update' : 'Simpan' ?></button>
         <a href="<?= route_to('pemeriksaan.index') ?>" class="btn btn-warning">Kembali</a>
     </div>
 </div>
 <?= $this->endSection() ?>