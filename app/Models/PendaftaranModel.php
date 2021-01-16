<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $table      = 'pendaftaran';
    protected $primaryKey = 'id_pendaftaran';

    protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['nama_pasien', 'tempat_lahir', 'jenis_kelamin', 'tanggal_lahir', 'nik', 'alamat', 'pekerjaan', 'status', 'gol_darah', 'pelayanan', 'poli', 'no_jamkes', 'nama_jamkes', 'no_rekam_medis', 'keluhan'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    //protected $validationRules    = [];
    //protected $validationMessages = [];
    //protected $skipValidation     = false;
}
