<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Characters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function( Blueprint $table) {
            $table->bigInteger('char_id')->primary();
            $table->string('name', 50);
            $table->date('birthday')->nullable();
            $table->string('img',500);
            $table->json('occupation');
            $table->string('status', 16);
            $table->string('nickname', 50);
            $table->string('appearance', 50);
            $table->string('portrayed', 50);
            $table->json('category');
            $table->json('better_call_saul_appearance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
