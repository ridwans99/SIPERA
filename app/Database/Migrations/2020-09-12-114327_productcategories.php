<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductCategories extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'product_category_id'          => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => TRUE,
                    'auto_increment' => TRUE
			],
			'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
            'description'       => [
                'type'           => 'TEXT',
			],
			'created_at' => [
				'type'           => 'TIMESTAMP',
			],
			'updated_at' => [
				'type'           => 'DATETIME',
			],
        ]);
        //primary key
        $this->forge->addKey('product_category_id', TRUE);
        //nama tabel
        $this->forge->createTable('productcategories');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
