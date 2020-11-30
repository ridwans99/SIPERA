<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Announcements extends Migration
{
	public function up()
	{
		$this->db->enableForeignKeyChecks();
		//list field
        $this->forge->addField([
            'announcement_id'          => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => TRUE,
                    'auto_increment' => TRUE
			],
			'admin_id'       => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'subject' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'attachment_path' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'description' => [
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
        $this->forge->addKey('announcement_id', TRUE);
        //nama tabel
        $this->forge->createTable('announcements');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
