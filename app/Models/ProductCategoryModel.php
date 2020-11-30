<?php
namespace App\Models;

use CodeIgniter\Model;

class ProductCategoryModel extends Model
{
    protected $table = 'productcategories';
    protected $primaryKey = 'product_category_id';
    protected $useTimestamps = true;

    public function getProductCategory($id = false){
        if ($id){
            return $this->where(['product_category_id' => $id])-> first();
        } else {
            return $this->findAll();
        }
    }

    public function insertProductCategory($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateProductCategory($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('product_category_id' => $id));
        return $query;
    }

    public function deleteProductCategory($id)
    {
        $query = $this->db->table($this->table)->delete(array('product_category_id' => $id));
        return $query;
    } 
}