<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('donations', function(Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('organisation_id')->unsigned();
            $table->foreign('organisation_id')->references('id')->on('organisation')->onDelete('cascade');

            $table->float('amount')->default(0);
            //Recursive Donations
            $table->tinyInteger('noenddate')->default(0);
            $table->tinyInteger('is_recursive')->default(0);
            $table->integer('max_occurance')->default(0);
            $table->string('recursive_type')->default(0);

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
        Schema::drop('donations');
    }

}
