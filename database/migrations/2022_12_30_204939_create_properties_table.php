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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // $table->unsignedBigInteger('project_id');
            // $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade')->change();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->change();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade')->change();
            $table->unsignedBigInteger('division_id')->nullable();
            $table->foreign('division_id')->references('id')->on('divisions')->onDelete('cascade')->change();
            $table->unsignedBigInteger('district_id')->nullable();
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade')->change();
            $table->string('property_name');
            $table->string('property_image')->nullable();
            $table->decimal('property_value',15,0);

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
};
