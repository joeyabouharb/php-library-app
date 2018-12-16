<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->string('ISBN');
            $table->string('title');
            $table->string('first_name');
            $table->string('last_name'); 
            $table->unsignedInteger('genre_id');
            $table->unsignedInteger('publisher_id');
            $table->timestamps();

            $table->foreign('genre_id')
            ->references('id')
            ->on('genres');

            $table->foreign('publisher_id')
            ->references('id')
            ->on('publishers');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
