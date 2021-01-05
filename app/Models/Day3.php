<?php

namespace App\Models;

use CodeIgniter\Model;

class Day3Model extends Model
{
    protected $table = 'day3';
    protected $primaryKey = 'day3_id';
    protected $useTimestamps = true;

    public function getDay3($id = false)
    {
        if ($id) {
            return $this->where(['day3_id' => $id])->first();
        } else {
            return $this->findAll();
        }
    }

    public function insertDay3($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateDay3($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('day3_id' => $id));
        return $query;
    }

    public function deleteDay3($id)
    {
        $query = $this->db->table($this->table)->delete(array('day3_id' => $id));
        return $query;
    }
}
