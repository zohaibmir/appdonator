<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');

            $table->text('first_name')->nullable();
            $table->text('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->text('address')->nullable();
            $table->text('zip')->nullable();
            //Fields for activation
            $table->tinyInteger('status')->default(0);

            $table->string('password', 64);
            $table->string('remember_token')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('users');
    }

}
