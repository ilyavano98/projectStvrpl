<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_models', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->integer("status");
            $table->text("message");
            $table->string("comment");
            $table->timestamp("created_at");
            $table->string("updated_at");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_models');
    }
}
