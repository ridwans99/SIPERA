<?php
namespace App\Models;

use CodeIgniter\Model;

class OrderStatusModel extends Model
{
    protected $table = 'orderstatuses';
    protected $primaryKey = 'orderstatus_id';
    protected $useTimestamps = true;

    public function getOrderStatus($id = false){
        if ($id){
            return $this->where(['orderstatus_id' => $id])-> first();
        } else {
            return $this->findAll();
        }
    }

    public function insertOrderStatus($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateOrderStatus($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('orderstatus_id' => $id));
        return $query;
    }

    public function deleteOrderStatus($id)
    {
        $query = $this->db->table($this->table)->delete(array('orderstatus_id' => $id));
        return $query;
    } 
}