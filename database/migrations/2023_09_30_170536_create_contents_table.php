<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->uuid('uuid')->primary()->unique();
            $table->foreignUuid('page_id');
            $table->foreignUuid('section_id');
            $table->string('title');
            $table->text('desc')->nullable();
            $table->string('slug');
            $table->enum('type', ['image', 'video', 'text']);
            $table->boolean('is_publish');
            $table->json('additional')->nullable();
            $table->string('created_by', 50);
            $table->string('updated_by', 50);
            $table->timestamps();

            $table->index(['is_publish', 'page_id', 'section_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
