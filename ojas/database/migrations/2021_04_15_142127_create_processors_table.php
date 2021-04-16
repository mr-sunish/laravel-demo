<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processors', function (Blueprint $table) {
            $table->id();
            $table->string("processor_name");
            $table->integer("model_id");
            $table->timestamps();
        });

         DB::table('processors')->insert(array(
            'processor_name'=>'D1 i3',
            'model_id'=>1
        ));
         DB::table('processors')->insert(array(
            'processor_name'=>'D1 i5',
            'model_id'=>1
        ));
         DB::table('processors')->insert(array(
            'processor_name'=>'D1 i7',
            'model_id'=>1
        ));

        DB::table('processors')->insert(array(
            'processor_name'=>'D2 i3',
            'model_id'=>2
        ));
         DB::table('processors')->insert(array(
            'processor_name'=>'D2 i5',
            'model_id'=>2
        ));
         DB::table('processors')->insert(array(
            'processor_name'=>'D2 i7',
            'model_id'=>2
        ));

        DB::table('processors')->insert(array(
            'processor_name'=>'L1 i3',
            'model_id'=>3
        ));
         DB::table('processors')->insert(array(
            'processor_name'=>'L1 i5',
            'model_id'=>3
        ));
         DB::table('processors')->insert(array(
            'processor_name'=>'L1 i7',
            'model_id'=>3
        ));

         DB::table('processors')->insert(array(
            'processor_name'=>'L2 i3',
            'model_id'=>4
        ));
         DB::table('processors')->insert(array(
            'processor_name'=>'L2 i5',
            'model_id'=>4
        ));
         DB::table('processors')->insert(array(
            'processor_name'=>'L2 i7',
            'model_id'=>4
        ));

         DB::table('processors')->insert(array(
            'processor_name'=>'H1 i3',
            'model_id'=>5
        ));
         DB::table('processors')->insert(array(
            'processor_name'=>'H1 i5',
            'model_id'=>5
        ));
         DB::table('processors')->insert(array(
            'processor_name'=>'H1 i7',
            'model_id'=>5
        ));

        DB::table('processors')->insert(array(
            'processor_name'=>'H2 i3',
            'model_id'=>6
        ));
         DB::table('processors')->insert(array(
            'processor_name'=>'H2 i5',
            'model_id'=>6
        ));
         DB::table('processors')->insert(array(
            'processor_name'=>'H2 i7',
            'model_id'=>6
        ));

         DB::table('processors')->insert(array(
            'processor_name'=>'M1 i3',
            'model_id'=>7
        ));
         DB::table('processors')->insert(array(
            'processor_name'=>'M1 i5',
            'model_id'=>7
        ));
         DB::table('processors')->insert(array(
            'processor_name'=>'M1 i7',
            'model_id'=>7
        ));

        DB::table('processors')->insert(array(
            'processor_name'=>'M2 i3',
            'model_id'=>8
        ));
         DB::table('processors')->insert(array(
            'processor_name'=>'M2 i5',
            'model_id'=>8
        ));
         DB::table('processors')->insert(array(
            'processor_name'=>'M2 i7',
            'model_id'=>8
        ));

         DB::table('processors')->insert(array(
            'processor_name'=>'A1 i3',
            'model_id'=>9
        ));
         DB::table('processors')->insert(array(
            'processor_name'=>'A1 i5',
            'model_id'=>9
        ));
         DB::table('processors')->insert(array(
            'processor_name'=>'A1 i7',
            'model_id'=>9
        ));

        DB::table('processors')->insert(array(
            'processor_name'=>'A2 i3',
            'model_id'=>10
        ));
         DB::table('processors')->insert(array(
            'processor_name'=>'A2 i5',
            'model_id'=>10
        ));
         DB::table('processors')->insert(array(
            'processor_name'=>'A2 i7',
            'model_id'=>10
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('processors');
    }
}
