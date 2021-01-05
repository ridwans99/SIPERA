<?php

namespace App\Models;

use CodeIgniter\Model;

class Day1Model extends Model
{
    protected $table = 'day1';
    protected $primaryKey = 'day1_id';
    protected $useTimestamps = true;

    public function getDay1($id = false)
    {
        if ($id) {
            return $this->where(['day1_id' => $id])->first();
        } else {
            return $this->findAll();
        }
    }

    public function insertDay1($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateDay1($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('day1_id' => $id));
        return $query;
    }

    public function deleteDay1($id)
    {
        $query = $this->db->table($this->table)->delete(array('day1_id' => $id));
        return $query;
    }
}
