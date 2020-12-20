<?php
namespace App\Models;

use CodeIgniter\Model;

class OrderBarangModel extends Model
{
    protected $table = 'ordersbarang';
    protected $primaryKey = 'orderbarang_id';
    protected $useTimestamps = true;

    public function getOrderBarang($id = false){
        if ($id){
            return $this->where(['orderbarang_id' => $id]) -> first();
        } else {
            return $this->findAll();
        }
    }

    public function insertOrderBarang($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateOrderBarang($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('orderbarang_id' => $id));
        return $query;
    }

    public function deleteOrderBarang($id)
    {
        $query = $this->db->table($this->table)->delete(array('orderbarang_id' => $id));
        return $query;
    } 
}