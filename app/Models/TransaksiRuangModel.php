<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiRuangModel extends Model
{
    protected $table = 'ordersruangan';
    protected $primaryKey = 'orderruangan_id';
    protected $useTimestamps = true;

    public function tampildata($id = false)
    {
        if ($id) {
            return $this->where(['orderruangan_id' => $id])->first();
        } else {
            return $this->findAll();
        }
    }
}
