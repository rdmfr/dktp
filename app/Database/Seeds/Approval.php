<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Approval extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        $this->db->connect();
        $pendudukData = $this->db->query("SELECT nik FROM penduduk")->getResultArray();
        for ($i=0; $i < 98; $i++) {
            $fakedata = [
                'status_approval' => $faker->randomElement(['proses','selesai','ditolak','verifikasi']),
                'tanggapan_approval' => $faker->sentence(7),
                'tgl_tanggapan' => $faker->date,
                'nik' => $pendudukData[$i]['nik']
            ];
            $this->db->table('approval')->insert($fakedata);
        }
    }
}
