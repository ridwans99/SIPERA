<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiBarangModel extends Model
{
    protected $table = 'ordersbarang';
    protected $primaryKey = 'orderbarang_id';
    protected $useTimestamps = true;

    public function tampildata($id = false)
    {
        if ($id) {
            return $this->where(['orderbarang_id' => $id])->first();
        } else {
            return $this->findAll();
        }
    }
}
