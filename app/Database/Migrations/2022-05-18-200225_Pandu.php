<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pandu extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pandu'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name_pandu'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'date_pandu'       => [
                'type'       => 'DATE',

            ],
            'info_pandu' => [
                'type' => 'TEXT',
                'null' => true,
            ],

        ]);
        $this->forge->addKey('id_pandu', true);
        $this->forge->createTable('pandu');
    }

    public function down()
    {
        $this->forge->dropTable('pandu');
    }
}
