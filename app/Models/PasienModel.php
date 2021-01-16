<?php

namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{
    protected $table      = 'pasien';
    protected $primaryKey = 'id_pasien';

    protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['nama_pasien', 'jenis_kelamin', 'umur', 'alamat', 'pekerjaan', 'nik', 'status', 'tempat_lahir', 'tanggal_lahir', 'gol_darah'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    //protected $validationRules    = ['nama_pasien'=>'required'];
    //protected $validationMessages = [];
    //protected $skipValidation     = false;
}
