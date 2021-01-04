<?php

namespace App\Models;

use CodeIgniter\Model;

class InputModel extends Model
{
    protected $table = 'inputdata';
    protected $primaryKey = 'input_id';
    protected $useTimestamps = true;

    public function tampildata($id = false)
    {
        if ($id) {
            return $this->where(['input_id' => $id])->first();
        } else {
            return $this->findAll();
        }
    }

    public function tambah($data)
    {
        return $this->db->table('inputdata')->insert($data);
    }

    public function updateInputData($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('input_id' => $id));
        return $query;
    }

    public function deleteInputData($id)
    {
        $query = $this->db->table($this->table)->delete(array('input_id' => $id));
        return $query;
    }
}
