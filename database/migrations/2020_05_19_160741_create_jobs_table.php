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
            $table->longText('desciption');
            $table->enum('jobtype',['fulltime','parttime']);
            $table->string('minsalary');
            $table->string('maxsalary');
            $table->boolean(' negotiable');
            $table->date('startdate');
            $table->string('contact');
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
