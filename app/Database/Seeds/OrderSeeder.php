<?php namespace App\Database\Seeds;

class OrderSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'user_id' => 1,
            'product_id' => 1,
            'orderstatus_id' => 0,
            'payment_id' => 0,
            'start_count' => 0,
            'quantity'    => 1000,
            'total_price' => 25000,
            'target_link' => 'https://www.instagram.com/?hl=en',
            'additional_message' => 'makasih',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => '0000-00-00 00:00:00' 
        ];
        // Using Query Builder
        $this->db->table('orders')->insert($data);
    }
}