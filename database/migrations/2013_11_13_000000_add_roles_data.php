<?php

use App\Models\Role;
use Illuminate\Database\Migrations\Migration;

class AddRolesData extends Migration
{
    public function up()
    {
        foreach($this->getRoles() as $role){
            Role::create($role);
        }
    }

    public function down()
    {
        foreach($this->getRoles() as $role){
            $model = Role::find($role['id']);
            if($model){
                $model->delete();
            }
        }
    }

    private function getRoles()
    {
        return [
            [
                'id' => Role::ADMIN,
                'name' => 'Admin'
            ],
            [
                'id' => Role::CLIENT,
                'name' => 'Client'
            ]
        ];
    }
}
