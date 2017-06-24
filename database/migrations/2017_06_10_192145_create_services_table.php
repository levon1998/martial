<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function(Blueprint $table){
            $table->increments('id');
            $table->string('title')->nullable()->default(null);
            $table->string('text')->nullable()->default(null);
            $table->string('image')->nullable()->default(null);
            $table->text('page_text')->nullable()->default(null);
            $table->string('title_hy')->nullable()->default(null);
            $table->string('text_hy')->nullable()->default(null);
            $table->text('page_text_hy')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
