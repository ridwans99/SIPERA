<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
{
	public function up()
	{
		$this->db->enableForeignKeyChecks();
		//list field
        $this->forge->addField([
            'product_id'          => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => TRUE,
                    'auto_increment' => TRUE
			],
			'product_category_id'       => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'name' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'description' => [
				'type'           => 'TEXT',
			],
			'attachment_path' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'price'       => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'price_per_1k'       => [
				'type'           => 'BOOLEAN',
			],
			'created_at' => [
				'type'           => 'TIMESTAMP',
			],
			'updated_at' => [
				'type'           => 'DATETIME',
			],
        ]);
        //primary key
        $this->forge->addKey('product_id', TRUE);
        //nama tabel
        $this->forge->createTable('products');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
