<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table      = 'laporan';
    protected $primaryKey = 'id_laporan';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_laporan', 'id_pendaftaran', 'no_pendaftaran', 'id_pasien', 'nama_pasien', 'tempat_lahir', 'tanggal_lahir', 'pekerjaan', 'id_ruangan', 'nama_ruangan', 'id_dokter', 'nama_dokter', 'tanggal', 'hasil_diagnosa', 'id_obat', 'nama_obat', 'dosis_obat', 'satuan_obat', 'harga_obat', 'id_rekam_medis', 'no_rekam_medis'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
