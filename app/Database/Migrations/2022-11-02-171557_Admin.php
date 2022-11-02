<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_admin' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'auto_increment'=> true
            ],
            'nama_admin' => [
                'type'          => 'VARCHAR',
                'constraint'    => 50,
            ],
            'email' => [
                'type'          => 'VARCHAR',
                'constraint'    => 50,
                'unique'        => true
            ],
            'password' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'no_telp' => [
                'type'          => 'VARCHAR',
                'constraint'    => 20,
            ],
            'level' => [
                'type'          => 'ENUM',
                'constraint'    => ['superadmin','admin'],
                'default'       => 'admin'
            ]
        ])->addKey('id_admin',true)->createTable('admin');
    }

    public function down()
    {
        $this->forge->dropTable('admin');
    }
}
