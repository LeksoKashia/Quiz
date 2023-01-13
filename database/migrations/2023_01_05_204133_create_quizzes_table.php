<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('path');
            $table->string('description');
            $table->integer('user_id');
            $table->integer('published_by_admin')->default(0); 
            # 1 nishanvs rom gamoqveynebulia adminis mier, mara adminis quizebi radganac tavistavad
            #gamoqveynebulia user_id-is gamo mag qvizebs published_by_admin 0 eqnebat
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
        Schema::dropIfExists('quizzes');
    }
};
