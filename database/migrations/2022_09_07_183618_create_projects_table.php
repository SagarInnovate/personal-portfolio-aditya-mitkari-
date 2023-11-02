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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table->string('project_title');
            $table->string('project_img');
            $table->string('description');
            $table->string('category');
            $table->string('technologies_used');
            $table->string('tags');
            $table->string('github')->nullable();
            $table->string('url_no_url');
            $table->string('str_url');
            $table->string('main_url')->nullable();
            $table->string('project_files')->nullable();
            $table->string('date');
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
        Schema::dropIfExists('projects');
    }
};