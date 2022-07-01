<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image_path')->nullable();

            //added: surname of of new registered user.
            $table->string('surname');
            $table->string('email')->unique();

            // $table->timestamp('email_verified_at')->nullable();

            $table->string('password');

            //added: role of new registered user.
            $table->enum('role', ['System', 'Admin', 'Gerant', 'Serveur', 'Cuisinier']);

            //added: account active or not default = active. 
            $table->boolean('deactivated')->default(FALSE);

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
