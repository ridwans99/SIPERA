<?php namespace App\Database\Seeds;

class PaymentSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'user_id' => 1, 
            'amounts'    => 25000,
            'payment_method' => 'OVO',
            'attachment_path' => '/img/uploads/pay1.jpg',
            'customer_confirmed' => TRUE,
            'admin_confirmed' => TRUE,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => '0000-00-00 00:00:00' 
        ];
        // Using Query Builder
        $this->db->table('payments')->insert($data);
    }
}