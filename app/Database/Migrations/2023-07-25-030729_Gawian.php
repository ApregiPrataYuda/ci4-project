<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Gawian extends Migration
{
    public function up()
    {
        
        $this->forge->addField([

            'id_gawi' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_gawi', true);
        $this->forge->createTable('gawi');
    }

    public function down()
    {
        $this->forge->dropTable('gawi');
    }
}
