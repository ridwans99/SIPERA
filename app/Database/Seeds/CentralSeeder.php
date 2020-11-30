<?php namespace App\Database\Seeds;

class CentralSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $this->call('UserSeeder');
        $this->call('AdminSeeder');
        $this->call('OrderSeeder');
        $this->call('ProductSeeder');
        $this->call('FeedbackSeeder');
        $this->call('OrderStatusSeeder');
        $this->call('PaymentSeeder');
        $this->call('ProductCategorySeeder');
        $this->call('AnnouncementSeeder');
    }
}