<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Payments extends Migration
{
	public function up()
	{
		$this->db->enableForeignKeyChecks();
		//list field
        $this->forge->addField([
            'payment_id'          => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => TRUE,
                    'auto_increment' => TRUE
			],
			'user_id'       => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'amounts'       => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'payment_method' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'attachment_path' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'customer_confirmed'       => [
				'type'           => 'BOOLEAN',
			],
			'admin_confirmed'       => [
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
        $this->forge->addKey('payment_id', TRUE);
        //nama tabel
        $this->forge->createTable('payments');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
