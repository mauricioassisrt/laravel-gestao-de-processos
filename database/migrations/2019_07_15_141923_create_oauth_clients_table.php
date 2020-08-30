<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOauthClientsTable extends Migration
{
    public function up()
    {
        Schema::create('oauth_clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('client_id');
            $table->string('client_secret');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('oauth_clients');
    }
}
