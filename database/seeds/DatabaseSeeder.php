<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(OAuthClientsTableSeeder::class);
        $this->call(ContractTermsTableSeeder::class);
        //$this->call(UsersTableSeeder::class);
    }
}
