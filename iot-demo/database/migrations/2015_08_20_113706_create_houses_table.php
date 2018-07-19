<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_name');//0
            $table->string('user_name');//1
            $table->integer('user_id')->unsigned();   // 追加
            $table->string('status');//3
            $table->string('h_data4');
            $table->string('h_data5');
            $table->string('h_data6');
            $table->string('h_data7');
            $table->string('h_data8');
            $table->string('h_data9'); 
            $table->string('user_name0');
            $table->string('user_name1');
            $table->string('user_name2');
            $table->string('user_name3');
            $table->string('user_name4');
            $table->string('user_name5');
            $table->string('user_name6');
            $table->string('user_name7');
            $table->string('user_name8');
            $table->string('user_name9'); 
            $table->timestamps();
            
            // 外部キーを追加
            $table->foreign('user_id')
                        ->references('id')
                        ->on('users')
                        ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('houses');
    }
}