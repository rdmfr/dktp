<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DetailPenduduk extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        $this->db->connect();
        $pendudukData = $this->db->query("SELECT nik,nama FROM penduduk")->getResultArray();
        for ($i=0; $i < 98; $i++) {
            $fakedata = [
                'nik' => $pendudukData[$i]['nik'],
                'foto' => urlencode($pendudukData[$i]['nama']).'_foto.jpg',
                'ttd' => urlencode($pendudukData[$i]['nama']).'_ttd.jpg',
                'sidik_jari' => urlencode($pendudukData[$i]['nama']).'sidikjari.zip',
            ];
            $this->db->table('detail_penduduk')->insert($fakedata);
        }
    }
}
