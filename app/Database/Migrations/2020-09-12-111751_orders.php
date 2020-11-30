<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orders extends Migration
{
	public function up()
	{
		$this->db->enableForeignKeyChecks();
		//list field
        $this->forge->addField([
            'order_id'          => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => TRUE,
                    'auto_increment' => TRUE
			],
			'user_id'       => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'product_id'       => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'orderstatus_id'       => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'payment_id'       => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'start_count'       => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'quantity'       => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'total_price' => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'target_link' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'additional_message' => [
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
        $this->forge->addKey('order_id', TRUE);
        //nama tabel
        $this->forge->createTable('orders');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
