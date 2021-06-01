<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_models', function (Blueprint $table) {
            $table->id();
            $table->string('name',250);
            $table->string('state');
            $table->string('city');
            $table->text('resume')->nullable();
            $table->string('img')->nullable();
            $table->timestamps();
            $table->engine='innoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_models');
    }
}
