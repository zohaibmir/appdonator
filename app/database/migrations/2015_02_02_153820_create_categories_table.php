<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('categories', function(Blueprint $table) {
            
            $table->engine = 'InnoDB';

            $table->increments('id');

            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('icon')->unique();
            //Fields for activation
            $table->tinyInteger('status')->default(0);        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('categories');
    }

}
