<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SidikJari extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'auto_increment'=> true
            ],
            'kanan_jempol' => [
                'type' => 'VARCHAR',
                'contraint' => 255,
            ],
            'kanan_telunjuk' => [
                'type' => 'VACHAR',
                'contraint' => 255,
            ],
            'kanan_jaritengah' => [
                'type' => 'VACHAR',
                'contraint' => 255,
            ],
            'kanan_jarimanis' =>[
                'type' => 'VACHAR',
                'contraint' => 255,
            ],
            'kanan_kelingking' =>[
                'type' => 'VACHAR',
                'contraint' => 255,
            ],
            'kiri_jempol' =>[
                'type' => 'VACHAR',
                'contraint' => 255,
            ],
            'kiri_telunjuk' =>[
                'type' => 'VACHAR',
                'contraint' => 255,
            ],
            'kiri_jaritengah' =>[
                'type' => 'VACHAR',
                'contraint' => 255,
            ],
            'kiri_jarimanis' =>[
                'type' => 'VACHAR',
                'contraint' => 255,
            ],
            'kiri_kelingking' =>[
                'type' => 'VACHAR',
                'contraint' => 255,
            ],
        ])->addKey('id_user', true)->createTable('sidik_jari');
    }
    public function down()
    {
        $this->forge->dropTable('sidik_jari ');
    }
}
