<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNominationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('nomination', function (Blueprint $table) {
            // Primary Key
            // $table->increments('id');
            $table->increments('nominationNo');

            // 
            $table->integer('studentNumber');
            $table->string('studentFirstName');
            $table->string('studentLastName');
            $table->string('email');
            $table->tinyInteger('gradThisYear');
            $table->string('description');
            $table->timestamps();

            // Foreign Keys
            $table->integer('professorNo');
            // $table->integer('awardId');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('nomination');
    }
}
