<?php
namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admins';
    protected $primaryKey = 'admin_id';
    protected $useTimestamps = true;

    public function getAdmin($id = false){
        if ($id){
            return $this->where(['admin_id' => $id])-> first();
        } else {
            return $this->findAll();
        }
    }

    public function getAdminByEmail($email = false){
        if ($email){
            return $this->where(['email' => $email]) -> first();
        } else {
            return $this->findAll();
        }
    }

    public function getAdminByUsername($username = false)
    {
        if($username == false){
            return $this->findAll();
        } else {
            return $this->where(['username' => $username]) -> first();
        }   
    } 

    public function insertAdmin($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateAdmin($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('admin_id' => $id));
        return $query;
    }

    public function getAdminName($id)
    {
        $query = $this->db->table($this->table)->select('full_name')->where('admin_id',$id);
        return $query->get()->getRowArray();
    }

    public function deleteAdmin($id)
    {
        $query = $this->db->table($this->table)->delete(array('admin_id' => $id));
        return $query;
    } 
}