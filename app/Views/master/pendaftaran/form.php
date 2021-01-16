 <?= $this->extend('layouts/master') ?>
 <?= $this->section('content') ?>
 <div class="card">
     <div class="card-header">
         <h3 class="card-title">Data Pendaftaran</h3>
     </div>
     <!-- /.card-header -->
     <div class="card-body">
         <form action="<?= isset($edit) ? route_to('pendaftaran.update', $pendaftaran['id_pendaftaran']) : route_to('pendaftaran.save') ?>" method="post">
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
                 <label for="exampleInputEmail1">Tempat Lahir</label>
                 <input type="text" name="tempat lahir" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : null ?>" value="<?= old('tempat_lahir') ?: (isset($edit) ? $pendaftaran['tempat_lahir'] : null) ?>" placeholder="Masukkan Tempat Lahir">
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('tempat_lahir') ?></span>
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">Tanggal Lahir</label>
                 <input type="date" name="tanggal lahir" class="form-control <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid' : null ?>" value="<?= old('tanggal_lahir') ?: (isset($edit) ? $pendaftaran['tanggal_lahir'] : null) ?>" placeholder="Masukkan Tanggal Lahir">
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
                 <label>Nama Jaminan Kesehatan</label>
                 <select class="form-control <?= ($validation->hasError('nama_jamkes')) ? 'is-invalid' : null ?>" name="nama_jamkes">
                     <option value="-">-</option>
                     <option value="bpjs_kesehatan">BPJS Kesehatan</option>
                     <option value="bpjs_ketenagakerjaan">BPJS Ketenagakerjaan</option>
                     <option value="kartu_indonesia_sehat">Kartu Indonesia Sehat</option>
                     <option value="jaminan_kesehatan_daerah">Jaminan Kesehatan Daerah</option>
                     <option value="jaminan_kesehatan_masyarakat">Jaminan Kesehatan Masyarakat</option>
                 </select>
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('nama_jamkes') ?></span>
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">Nomor Jaminan Kesehatan</label>
                 <input type="number" name="no jamkes" class="form-control <?= ($validation->hasError('no_jamkes')) ? 'is-invalid' : null ?>" value="<?= old('no_jamkes') ?: (isset($edit) ? $pendaftaran['no_jamkes'] : null) ?>" placeholder="Tulis Nomor Jaminan Kesehatan">
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('no_jamkes') ?></span>
             </div>
             <div class="form-group">
                 <label>Keluhan</label>
                 <textarea class="form-control <?= ($validation->hasError('keluhan')) ? 'is-invalid' : null ?>" value="<?= old('keluhan') ?: (isset($edit) ? $pendaftaran['keluhan'] : null) ?>" rows="2" name="keluhan" placeholder="Tulis Keluhan" autofocus></textarea>
                 <span id="exampleInputEmail1-error" class="error invalid-feedback"><?= $validation->getError('keluhan') ?></span>
             </div>
     </div>
     <div class="card-footer">
         <button type="submit" class="btn btn-primary"><?= isset($edit) ? 'Update' : 'Simpan' ?></button>
         <a href="<?= route_to('pendaftaran.index') ?>" class="btn btn-warning">Kembali</a>
     </div>
 </div>
 <?= $this->endSection() ?>