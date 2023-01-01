<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('spu_id')->index()->nullable();
            $table->unsignedBigInteger('user_id')->index()->nullable();
            $table->date('date')->nullable();
            $table->integer('time')->nullable();
            $table->string('note')->nullable();
            $table->string('status')->nullable();
            $table->json('payload')->nullable();
            $table->unsignedBigInteger('company_id')->index();
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
        Schema::dropIfExists('appointments');
    }
};
