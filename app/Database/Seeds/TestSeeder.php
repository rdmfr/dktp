<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TestSeeder extends Seeder
{
    public function run()
    {
        $this->call('Admin');
        $this->call('Setting');
        $this->call('Penduduk');
        $this->call('DetailPenduduk');
        $this->call('Approval');
    }
}
