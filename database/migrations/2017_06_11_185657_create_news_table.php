<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->string('short_description');
            $table->string('description');
            $table->string('title_hy')->nullable()->default(null);
            $table->string('short_description_hy')->nullable()->default(null);
            $table->string('description_hy')->nullable()->default(null);
            $table->string('image')->nullable()->default(null);
            $table->string('view')->default(0);
            $table->string('slug')->nullable()->default(null);
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
        Schema::dropIfExists('news');
    }
}
