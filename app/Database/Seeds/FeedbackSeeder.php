<?php namespace App\Database\Seeds;

class FeedbackSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'order_id' => 1, 
            'message' => 'mantap om work parah',
            'attachment_path' => '/img/uploads/testi1.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => '0000-00-00 00:00:00'
        ];
        // Using Query Builder
        $this->db->table('feedbacks')->insert($data);
    }
}