<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admins extends Migration
{
	public function up()
	{
		//list field
        $this->forge->addField([
            'admin_id'          => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => TRUE,
                    'auto_increment' => TRUE
			],
			'full_name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '25',
			],
            'username'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '25',
			],
			'email' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
            'password' => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
			],
        ]);
        //primary key
        $this->forge->addKey('admin_id', TRUE);
        //nama tabel
        $this->forge->createTable('admins');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
