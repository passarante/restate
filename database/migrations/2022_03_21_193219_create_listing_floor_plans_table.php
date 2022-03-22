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
        Schema::create('listing_floor_plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId("listing_id")->constrained("listings");
            $table->string("title");
            $table->string("description")->nullable();
            $table->integer("lot_size");
            $table->string("plan_image");
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
        Schema::dropIfExists('listing_floor_plans');
    }
};
