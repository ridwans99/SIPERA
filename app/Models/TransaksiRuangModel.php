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

    public function tambah($data)
    {
        return $this->db->table('ordersruangan')->insert($data);
    }

    public function updateTransaksiRuangan($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('orderruangan_id' => $id));
        return $query;
    }

    public function deleteTransaksiRuangan($id)
    {
        $query = $this->db->table($this->table)->delete(array('orderruangan_id' => $id));
        return $query;
    }
}
