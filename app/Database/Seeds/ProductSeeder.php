<?php namespace App\Database\Seeds;

class ProductSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [ 
            'product_category_id' => 1,
            'name' => 'Followers Instagram Server 1',
            'description'    => 'High drop, murah tapi',
            'attachment_path' => '/img/uploads/gambar1.jpg',
            'price' => 25000,
            'price_per_1k' => TRUE,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => '0000-00-00 00:00:00' 
        ];
        // Using Query Builder
        $this->db->table('products')->insert($data);
    }
}