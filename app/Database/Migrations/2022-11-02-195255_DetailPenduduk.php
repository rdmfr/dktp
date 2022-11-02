<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailPenduduk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_detail' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'auto_increment'=> true
            ],
            'nik' => [
                'type'          => 'BIGINT',
                'constraint'    => 16
            ],
            'foto' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'ttd' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'sidik_jari' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ]
        ])->addKey('id_detail',true)
        ->addForeignKey('nik','penduduk','nik')
        ->createTable('detail_penduduk');
    }

    public function down()
    {
        $this->forge->dropTable('detail_penduduk');
    }
}
