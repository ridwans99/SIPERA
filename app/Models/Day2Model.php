<?php

namespace App\Models;

use CodeIgniter\Model;

class Day2Model extends Model
{
    protected $table = 'day2';
    protected $primaryKey = 'day2_id';
    protected $useTimestamps = true;

    public function getDay2($id = false)
    {
        if ($id) {
            return $this->where(['day2_id' => $id])->first();
        } else {
            return $this->findAll();
        }
    }

    public function insertDay2($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateDay2($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('day2_id' => $id));
        return $query;
    }

    public function deleteDay2($id)
    {
        $query = $this->db->table($this->table)->delete(array('day2_id' => $id));
        return $query;
    }
}
