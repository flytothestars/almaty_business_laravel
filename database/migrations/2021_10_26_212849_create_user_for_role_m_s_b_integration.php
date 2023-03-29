<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserForRoleMSBIntegration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \Illuminate\Support\Facades\Artisan::call('db:seed', [
            '--class' => \Database\Seeders\RoleSeeder::class
        ]);

        \Illuminate\Support\Facades\Artisan::call('db:seed', [
            '--class' => \Database\Seeders\UserForRoleMSBIntegration::class
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
