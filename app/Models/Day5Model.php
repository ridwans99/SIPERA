<?php

namespace App\Models;

use CodeIgniter\Model;

class Day5Model extends Model
{
    protected $table = 'day5';
    protected $primaryKey = 'day5_id';
    protected $useTimestamps = true;

    public function getDay5($id = false)
    {
        if ($id) {
            return $this->where(['day5_id' => $id])->first();
        } else {
            return $this->findAll();
        }
    }

    public function insertDay5($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateDay5($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('day5_id' => $id));
        return $query;
    }

    public function deleteDay5($id)
    {
        $query = $this->db->table($this->table)->delete(array('day5_id' => $id));
        return $query;
    }
}
