<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->string('project name');
            $table->integer('building number');
            $table->string('coordinates',10);
            $table->string('the owner of real estate');
            $table->string('Commissioner');
            $table->integer('Commissioner ID number');
            $table->string('Commissioner address');
            $table->integer('Part number and voucher');
            $table->integer('Land area');
            $table->string('Supervising engineer');
            $table->string('Project type');
            $table->string('Project status');
            $table->date('starting date');
            $table->date('Expiry date');
            $table->integer('Budget by days');
            $table->string('the currency');
            $table->string('Notes');
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
        Schema::dropIfExists('project');
    }
}
