<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrudandsearchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crudandsearch', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('employeeName');
			$table->string('designation');
			$table->string('salary')->nullable();
			$table->string('profile_image');
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
        Schema::dropIfExists('crudandsearch');
    }
}
