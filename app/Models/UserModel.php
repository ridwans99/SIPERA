<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $useTimestamps = true;

    public function getUser($id = false)
    {
        if ($id) {
            return $this->where(['user_id' => $id])->first();
        } else {
            return $this->findAll();
        }
    }

    public function getUserByNRM($nrm = false)
    {
        if($nrm == false){
            return $this->findAll();
        } else {
            return $this->where(['nrm' => $nrm]) -> first();
        }   
    } 

    public function insertUser($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateUser($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('user_id' => $id));
        return $query;
    }

    public function deleteUser($id)
    {
        $query = $this->db->table($this->table)->delete(array('user_id' => $id));
        return $query;
    }
}
