<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $useTimestamps = true;

    public function tampildata($id = false)
    {
        if ($id) {
            return $this->where(['user_id' => $id])->first();
        } else {
            return $this->findAll();
        }
    }

    public function tambah($data)
    {
        return $this->db->table('users')->insert($data);
    }

    public function updateUser($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('user_id' => $id));
        return $query;
    }

    public function deleteUsers($id)
    {
        $query = $this->db->table($this->table)->delete(array('user_id' => $id));
        return $query;
    }
}
