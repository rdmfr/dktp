<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Setting extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        $this->db->connect();
        $adminData = $this->db->query("SELECT id_admin FROM admin")->getResultArray();
        for ($i=0; $i < 98; $i++) { 
            $fakedata = [
                'kode_wilayah' => $faker->postcode,
                'nama_wilayah' => $faker->streetName,
                'jenis_wilayah' => $faker->randomElement(['desa','kelurahan']),
                'kecamatan' => $faker->state,
                'kab_kota' => $faker->city,
                'provinsi' => $faker->country,
                'nip_pimpinan' => $faker->randomNumber(5,false),
                'nama_pimpinan' => $faker->name,
                'ttd_pimpinan' => urlencode($faker->name).'.jpg',
                'nip_sekretaris'=> $faker->randomNumber(5,false),
                'nama_sekretaris'=> $faker->name,
                'ttd_sekretaris'=> urlencode($faker->name).'.jpg',
                'id_admin' => $adminData[$i]
            ];
            $this->db->table('setting')->insert($fakedata);
        }
    }
}
