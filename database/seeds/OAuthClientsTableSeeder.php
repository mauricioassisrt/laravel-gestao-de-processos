<?php

use Illuminate\Database\Seeder;

class OAuthClientsTableSeeder extends Seeder
{
    public function run()
    {
        foreach($this->getData() as $item){
            \App\Models\OauthClient::create($item);
        }
    }

    private function getData()
    {
        return [
            [
                'name' => 'Mobile App',
                'client_id' => '$2y$10$.2ko07jn.J0/x/6V4dE88OfQkaLFspVwsXjLmEO264nzLG/gAy3pO',
                'client_secret' => '$2y$10$WG/qaWaSOmsCXlMonFgfi.1Kdo./Ztv/dKaORjlaTHiZKU2kuxpbq'
            ]
        ];
    }
}
