<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_models', function (Blueprint $table) {
            $table->id();
            $table->string("model_name");
            $table->integer("make_id");
            $table->timestamps();
        });
        DB::table('product_models')->insert(array(
            'model_name'=>'D1',
            'make_id'=>1
        ));
        DB::table('product_models')->insert(array(
            'model_name'=>'D2',
            'make_id'=>1
        ));

        DB::table('product_models')->insert(array(
            'model_name'=>'L1',
            'make_id'=>2
        ));DB::table('product_models')->insert(array(
            'model_name'=>'L2',
            'make_id'=>2
        ));

        DB::table('product_models')->insert(array(
            'model_name'=>'H1',
            'make_id'=>3
        ));DB::table('product_models')->insert(array(
            'model_name'=>'H2',
            'make_id'=>3
        ));

        DB::table('product_models')->insert(array(
            'model_name'=>'M1',
            'make_id'=>4
        ));DB::table('product_models')->insert(array(
            'model_name'=>'M2',
            'make_id'=>4
        ));

        DB::table('product_models')->insert(array(
            'model_name'=>'A1',
            'make_id'=>5
        ));DB::table('product_models')->insert(array(
            'model_name'=>'A2',
            'make_id'=>5
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_models');
    }
}
