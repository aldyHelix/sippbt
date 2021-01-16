<?php

namespace App\Models;

use CodeIgniter\Model;

class DokterModel extends Model
{
    protected $table      = 'dokter';
    protected $primaryKey = 'id_dokter';

    protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['nama_dokter', 'jenis_kelamin', 'umur', 'alamat', 'no_telpon', 'tempat_lahir', 'tanggal_lahir', 'nip'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    //protected $validationRules    = ['nama_dokter'=>'required'];
    //protected $validationMessages = [];
    //protected $skipValidation     = false;
}
