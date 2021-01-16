<?php

namespace App\Models;

use CodeIgniter\Model;

class PemeriksaanModel extends Model
{
    protected $table      = 'pemeriksaan';
    protected $primaryKey = 'id_pemeriksaan';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [ 'nama_pasien', 'jenis_kelamin', 'tanggal_lahir', 'alamat', 'pekerjaan', 'gol_darah', 'pelayanan', 'poli', 'keluhan', 'nama_dokter','tanggal'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
