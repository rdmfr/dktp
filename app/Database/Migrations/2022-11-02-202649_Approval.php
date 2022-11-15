<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Approval extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_approval' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'auto_increment'=> true
            ],
            'status_approval' => [
                'type'          => 'ENUM',
                'constraint'    => ['proses','selesai','ditolak','verifikasi'],
            ],
            'tanggapan_approval' => [
                'type'          => 'TEXT'
            ],
            'tgl_tanggapan' => [
                'type'          => 'DATE'
            ],
            'nik' => [
                'type'          => 'BIGINT',
                'constraint'    => 16,
            ]
        ])->addKey('id_approval',true)
        ->addForeignKey('nik','penduduk','nik','CASCADE','CASCADE')
        ->createTable('approval');
    }

    public function down()
    {
        $this->forge->dropTable('approval');
    }
}
