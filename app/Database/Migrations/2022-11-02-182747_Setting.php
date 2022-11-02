<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Setting extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_setting' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'auto_increment'=> true
            ],
            'kode_wilayah' => [
                'type'          => 'VARCHAR',
                'constraint'    => 20,
                'unique'        => true
            ],
            'nama_wilayah' => [
                'type'          => 'VARCHAR',
                'constraint'    => 50,
            ],
            'jenis_wilayah' => [
                'type'          => 'ENUM',
                'constraint'    => ['desa','kelurahan'],
            ],
            'kecamatan' => [
                'type'          => 'VARCHAR',
                'constraint'    => 50,
            ],
            'kab_kota' => [
                'type'          => 'VARCHAR',
                'constraint'    => 50,
            ],
            'provinsi' => [
                'type'          => 'VARCHAR',
                'constraint'    => 50,
            ],
            'nip_pimpinan' => [
                'type'          => 'VARCHAR',
                'constraint'    => 50,
            ],
            'nama_pimpinan' => [
                'type'          => 'VARCHAR',
                'constraint'    => 50,
            ],
            'ttd_pimpinan' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'nip_sekretaris' => [
                'type'          => 'VARCHAR',
                'constraint'    => 50,
            ],
            'nama_sekretaris' => [
                'type'          => 'VARCHAR',
                'constraint'    => 50,
            ],
            'ttd_sekretaris' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'id_admin' => [
                'type'          => 'INT',
                'constraint'    => 11,
            ]
        ])->addKey('id_setting',true)
        ->addForeignKey('id_admin','admin','id_admin')
        ->createTable('setting');
    }

    public function down()
    {
        $this->forge->dropTable('setting');
    }
}
