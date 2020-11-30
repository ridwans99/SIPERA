<?php namespace App\Database\Seeds;

class AdminSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'full_name' => 'Zaidan Pratama',
            'username' => 'zaidanhaha',
            'email'    => 'zaidan@gmail.com',
            'password' => 'zaidanwkwk'
        ];
        
        // Using Query Builder
        $this->db->table('admins')->insert($data);
    }
}