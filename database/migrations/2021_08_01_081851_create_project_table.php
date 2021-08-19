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
            $table->string('projectname');
            $table->integer('buildingnumber',null);
            $table->string('coordinates',10);
            $table->string('theowner');
            $table->string('Commissioner');
            $table->integer('CommissionerID');
            $table->string('CommissionerAddress');
            $table->integer('PartNumber');
            $table->integer('LandArea');
            $table->string('SupervisingEngineer');
            $table->string('ProjectType');
            $table->string('ProjectStatus');
            $table->text('startingDate');
            $table->text('ExpiryDate');
            $table->integer('BudgetBydays');
            $table->string('theCurrency');
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
