<?php
namespace App\Models;

use CodeIgniter\Model;

class PaymentModel extends Model
{
    protected $table = 'payments';
    protected $primaryKey = 'payment_id';
    protected $useTimestamps = true;

    public function getPayment($id = false){
        if ($id){
            return $this->where(['payment_id' => $id])-> first();
        } else {
            return $this->findAll();
        }
    }

    public function insertPayment($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updatePayment($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('payment_id' => $id));
        return $query;
    }

    public function deletePayment($id)
    {
        $query = $this->db->table($this->table)->delete(array('payment_id' => $id));
        return $query;
    } 
}