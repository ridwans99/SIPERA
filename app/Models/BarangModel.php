<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barangs';
    protected $primaryKey = 'barang_id';
    protected $useTimestamps = true;

    public function tampildata($id = false)
    {
        if ($id) {
            return $this->where(['barang_id' => $id])->first();
        } else {
            return $this->findAll();
        }
    }

    public function tambah($data)
    {
        return $this->db->table('barangs')->insert($data);
    }

    public function updateBarang($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('barang_id' => $id));
        return $query;
    }

    public function deleteBarang($id)
    {
        $query = $this->db->table($this->table)->delete(array('barang_id' => $id));
        return $query;
    }
}
