<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;

class AddUserAdminData extends Migration
{
    public function up()
    {
        User::create($this->getUser());
    }

    public function down()
    {
        $model = User::whereEmail($this->getUser()['email'])->first();

        if($model){
            $model->delete();
        }
    }

    private function getUser()
    {
        return [
            'name'          => 'Admin',
            'email'         => 'admin@vertice.digital',
            'document'      => '000.000.000-00',
            'phone'         => '031999999999',
            'address'       => 'Rua abc, 133, centro - RJ',
            'filiate_code'  => 'xe5w85a',
            'birthdate'     => '1990-05-12',
            'password'      => 'abc123',
            'role_id'       => \App\Models\Role::ADMIN
        ];
    }
}

