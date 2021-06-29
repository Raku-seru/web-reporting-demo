<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->unsignedBigInteger('status');
            $table->string('remarks')->nullable();
            $table->string('imageurl_1')->nullable();
            $table->string('imageurl_2')->nullable();
            $table->string('imageurl_3')->nullable();
            $table->string('imageurl_4')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('job_id')->nullable();;
            $table->timestamps();
            
            $table->foreign('status')->references('id')->on('statuses')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
