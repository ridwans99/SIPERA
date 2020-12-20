<?php
namespace App\Models;

use CodeIgniter\Model;

class OrderRuanganModel extends Model
{
    protected $table = 'ordersruangan';
    protected $primaryKey = 'orderruangan_id';
    protected $useTimestamps = true;

    public function getOrderRuangan($id = false){
        if ($id){
            return $this->where(['orderruangan_id' => $id]) -> first() ;
        } else {
            return $this->findAll();
        }
    }

    public function insertOrderRuangan($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateOrderRuangan($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('orderruangan_id' => $id));
        return $query;
    }

    public function deleteOrderRuangan($id)
    {
        $query = $this->db->table($this->table)->delete(array('orderruangan_id' => $id));
        return $query;
    } 
}