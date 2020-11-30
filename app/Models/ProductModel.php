<?php
namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    protected $useTimestamps = true;

    public function getProduct($id = false){
        if ($id){
            return $this->where(['product_id' => $id])-> first();
        } else {
            return $this->findAll();
        }
    }

    public function insertProduct($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateProduct($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('product_id' => $id));
        return $query;
    }

    public function getProductName($id)
    {
        $query = $this->db->table($this->table)->select('name')->where('product_id',$id);
        return $query->get()->getRowArray();
    }

    public function deleteProduct($id)
    {
        $query = $this->db->table($this->table)->delete(array('product_id' => $id));
        return $query;
    } 
}