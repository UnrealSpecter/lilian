<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_entries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('year_of_achievement')->nullable();
            $table->string('description');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('cv_categories')->onDelete('cascade');
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
        Schema::dropIfExists('cv_entries');
    }
}
