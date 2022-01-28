<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->unsignedBigInteger('price');
            $table->text('desc');
            $table->enum('status', ['For rent', 'On sale']);
            $table->float('long')->nullable();
            $table->float('alt')->nullable();
            $table->string('locality');
            $table->unsignedBigInteger('bath');
            $table->unsignedBigInteger('hab');
            $table->unsignedBigInteger('est')->nullable();
            $table->unsignedBigInteger('pool')->nullable();
            $table->unsignedBigInteger('area');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->string('tour_virtual', 150)->nullable();
            $table->enum('publish', ['published','unpublished']);
            
            
            //Foreign Keys
            
            $table->foreign('user_id')
                            ->references('id')
                            ->on('users')
                            ->onDelete('cascade')
                            ->onUpdate('cascade');
            
            $table->foreign('category_id')
                            ->references('id')
                            ->on('categories')
                            ->onDelete('cascade')
                            ->onUpdate('cascade');
            
            
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
        Schema::dropIfExists('properties');
    }
}
