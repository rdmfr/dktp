<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Admin extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_admin' => 'superadmin',
                'email' => 'super@admin.com',
                'password' => password_hash('Masteradminw3b',PASSWORD_DEFAULT),
                'no_telp' => '082111222333',
                'level' => 'superadmin'
            ],
            [
                'nama_admin' => 'admin1',
                'email' => 'admin1@admin.com',
                'password' => password_hash('Adminweb1',PASSWORD_DEFAULT),
                'no_telp' => '082111222334',
                'level' => 'admin'
            ]
        ];
        $this->db->table('admin')->insertBatch($data);
        // dummy data
        $faker = \Faker\Factory::create();
        for ($i=0; $i < 98; $i++) { 
            $fakedata = [
                'nama_admin' => $faker->name,
                'email' => $faker->safeEmail,
                'password' => password_hash($faker->password(6,16),PASSWORD_DEFAULT),
                'no_telp' => $faker->phoneNumber,
                'level' => $faker->randomElement(['superadmin','admin'])
            ];
            $this->db->table('admin')->insert($fakedata);
        }
    }
}
