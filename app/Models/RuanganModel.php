<?php

namespace App\Models;

use CodeIgniter\Model;

class RuanganModel extends Model
{
    protected $table = 'ruangans';
    protected $primaryKey = 'ruangan_id';
    protected $useTimestamps = true;

    public function tampildata($id = false)
    {
        if ($id) {
            return $this->where(['ruangan_id' => $id])->first();
        } else {
            return $this->findAll();
        }
    }

    public function tambah($data)
    {
        return $this->db->table('ruangans')->insert($data);
    }

    public function updateRuangan($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('ruangan_id' => $id));
        return $query;
    }

    public function deleteRuangan($id)
    {
        $query = $this->db->table($this->table)->delete(array('ruangan_id' => $id));
        return $query;
    }
}
