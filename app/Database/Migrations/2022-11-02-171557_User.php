<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'auto_increment'=> true
            ],
            'nama_user' => [
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
                'constraint'    => ['superadmin','admin','user'],
                'default'       => 'user'
            ],
            'foto_profil' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'verify_key' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null'          => true,
                'unique'        => true,
            ]
        ])->addKey('id_user',true)->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
