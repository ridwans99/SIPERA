<?php namespace App\Database\Seeds;

class OrderStatusSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'name' => 'Keluhan', 
            'description' => 'keluhan-keluhan pelanggan',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => '0000-00-00 00:00:00' 
        ];
        // Using Query Builder
        $this->db->table('orderstatuses')->insert($data);
    }
}