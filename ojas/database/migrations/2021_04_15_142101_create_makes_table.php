<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makes', function (Blueprint $table) {
            $table->id();
            $table->string("make_name");
            $table->timestamps();
        });
        DB::table('makes')->insert(array(
            'make_name'=>'dell'
        ));
        DB::table('makes')->insert(array(
            'make_name'=>'lenovo'
        ));
        DB::table('makes')->insert(array(
            'make_name'=>'hp'
        ));
        DB::table('makes')->insert(array(
            'make_name'=>'mac'
        ));
        DB::table('makes')->insert(array(
            'make_name'=>'asus'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('makes');
    }
}
