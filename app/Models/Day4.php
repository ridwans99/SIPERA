<?php

namespace App\Models;

use CodeIgniter\Model;

class Day4Model extends Model
{
    protected $table = 'day4';
    protected $primaryKey = 'day4_id';
    protected $useTimestamps = true;

    public function getDay4($id = false)
    {
        if ($id) {
            return $this->where(['day4_id' => $id])->first();
        } else {
            return $this->findAll();
        }
    }

    public function insertDay4($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateDay4($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('day4_id' => $id));
        return $query;
    }

    public function deleteDay4($id)
    {
        $query = $this->db->table($this->table)->delete(array('day4_id' => $id));
        return $query;
    }
}
