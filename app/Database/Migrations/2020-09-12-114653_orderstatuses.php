<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class OrderStatuses extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'orderstatus_id'          => [
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
                'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'created_at' => [
				'type'           => 'TIMESTAMP',
			],
			'updated_at' => [
				'type'           => 'DATETIME',
			],
        ]);
        //primary key
        $this->forge->addKey('orderstatus_id', TRUE);
        //nama tabel
        $this->forge->createTable('orderstatuses');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
