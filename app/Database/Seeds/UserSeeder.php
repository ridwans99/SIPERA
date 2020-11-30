<?php namespace App\Database\Seeds;

class UserSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'full_name' => 'Muhammad Ardani',
            'email'    => 'ardani77@gmail.com',
            'image_url' => '',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' =>'0000-00-00 00:00:00'
        ];
        // Using Query Builder
        $this->db->table('users')->insert($data);
    }
}