<?php namespace App\Database\Seeds;

class ProductCategorySeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'name' => 'Tiktok',
            'description' => 'Tiktok Followers',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => '0000-00-00 00:00:00' 
        ];
        // Using Query Builder
        $this->db->table('productcategories')->insert($data);
    }
}