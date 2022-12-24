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
            $table->unsignedBigInteger('user_sku_id')->index()->nullable();
            $table->unsignedBigInteger('sku_id')->index()->nullable();
            $table->unsignedBigInteger('spu_id')->index()->nullable();
            $table->unsignedBigInteger('user_id')->index()->nullable();
            $table->dateTime('scheduled_at')->nullable();
            $table->string('note')->nullable();
            $table->string('status');
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
