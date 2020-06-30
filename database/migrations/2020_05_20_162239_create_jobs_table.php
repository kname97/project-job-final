<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',60);
            $table->longText('desciption')->nullable();
            $table->string('jobtype');
            $table->string('minsalary')->nullable();
            $table->string('maxsalary')->nullable();
            $table->boolean(' negotiable')->default(0);
            $table->string('position')->nullable();
            $table->integer('exp')->nullable();
            $table->date('startdate');
            $table->string('email');
            $table->string('phone');
            $table->integer('user_id');
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
        Schema::dropIfExists('jobs');
    }
}
