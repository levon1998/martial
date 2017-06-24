<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function(Blueprint $table){
            $table->increments('id');
            $table->string('name')->nullable()->default(null);
            $table->string('description')->nullable()->default(null);
            $table->string('name_hy')->nullable()->default(null);
            $table->string('description_hy')->nullable()->default(null);
            $table->string('image')->nullable()->default(null);
            $table->string('fb')->nullable()->default(null);
            $table->string('youtube')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
