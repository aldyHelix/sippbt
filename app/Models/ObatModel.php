<?php

namespace App\Models;

use CodeIgniter\Model;

class ObatModel extends Model
{
    protected $table      = 'obat';
    protected $primaryKey = 'id_obat';

    protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['nama_obat', 'golongan_obat', 'jenis_obat', 'dosis_obat', 'satuan_dosis', 'satuan_obat', 'harga_beli', 'harga_jual', 'sisa_obat', 'harga_obat'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // protected $validationRules    = ['nama_obat'=>'required'];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}
