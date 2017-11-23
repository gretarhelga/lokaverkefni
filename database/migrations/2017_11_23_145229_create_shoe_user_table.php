<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoeUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoe_user', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('shoe_id');
            $table->unsignedInteger('user_id');
            $table->foreign('shoe_id')->references("id")->on("users");
            $table->foreign('user_id')->references("id")->on("shoes");
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
        Schema::dropIfExists('shoe_user');
    }
}
