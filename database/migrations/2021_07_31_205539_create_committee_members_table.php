<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommitteeMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('committee_members', function (Blueprint $table) {
            $table->bigIncrements('committee_member_id')->unique();
            $table->unsignedBigInteger('committee_id');
            $table->unsignedBigInteger('employee_id');
            $table->foreign('committee_id')->references('committee_id')->on('committees')->onDelete('cascade');
            $table->foreign('employee_id')->references('employee_id')->on('employees')->onDelete('cascade');
            $table->enum('task',['administrator','member']);
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
        Schema::dropIfExists('committee_members');
    }
}
