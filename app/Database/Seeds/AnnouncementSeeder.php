<?php namespace App\Database\Seeds;

class AnnouncementSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'admin_id' => 1,
            'subject'    => 'Promo gila-gilaan',
            'description' => 'Nikmati promo blablabla',
            'attachment_path' => '/img/uploads/gambar2.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => '0000-00-00 00:00:00'
        ];
        // Using Query Builder
        $this->db->table('announcements')->insert($data);
    }
}