<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Run extends Seeder
{
    public function run()
    {
        $this->call('UsersSeeder');
        $this->call('OrganizacaoSeeder');
    }
}
