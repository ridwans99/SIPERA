<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Feedbacks extends Migration
{
	public function up()
	{
		$this->db->enableForeignKeyChecks();
		//list field
        $this->forge->addField([
            'feedback_id'          => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => TRUE,
                    'auto_increment' => TRUE
			],
			'order_id'       => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'attachment_path' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'message' => [
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
        $this->forge->addKey('feedback_id', TRUE);
        //nama tabel
        $this->forge->createTable('feedbacks');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
