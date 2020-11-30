<?php
namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'order_id';
    protected $useTimestamps = true;

    public function getOrder($id = false){
        if ($id){
            return $this->where(['order_id' => $id]) -> first() ;
        } else {
            return $this->findAll();
        }
    }

    public function insertOrder($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateOrder($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('order_id' => $id));
        return $query;
    }

    public function deleteOrder($id)
    {
        $query = $this->db->table($this->table)->delete(array('order_id' => $id));
        return $query;
    } 
}