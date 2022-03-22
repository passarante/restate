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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId("category_id")->constrained("categories");
            $table->foreignId("user_id")->constrained("users");
            $table->string("title");
            $table->string("address");
            $table->text("description");
            $table->string("type");
            $table->string("capacity");
            $table->integer("room_count");
            $table->integer("saloon_count");
            $table->integer("bedroom_count");
            $table->integer("bed_count");
            $table->integer("bathroom_count");
            $table->integer("lot_size");
            $table->integer("garage_size")->nullable();
            $table->string("video_url")->nullable();
            $table->decimal("price", 18, 2);
            $table->integer("view_count")->default(0);
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
        Schema::dropIfExists('listings');
    }
};
