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

    public function tambah($data)
    {
        return $this->db->table('ordersbarang')->insert($data);
    }

    public function updateTransaksiBarang($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('orderbarang_id' => $id));
        return $query;
    }

    public function deleteTransaksiBarang($id)
    {
        $query = $this->db->table($this->table)->delete(array('orderbarang_id' => $id));
        return $query;
    }
}
