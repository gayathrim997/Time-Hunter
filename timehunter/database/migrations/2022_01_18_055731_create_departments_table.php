<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('departments');
        Schema::create('departments', function (Blueprint $table) {
            $table->Integer('id', true);
            $table->string('name');
            $table->string('description');
            $table->integer('added_by');
            $table->enum('status',['active','inactive'])->default('active');;
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
        Schema::dropIfExists('departments');
    }
}
