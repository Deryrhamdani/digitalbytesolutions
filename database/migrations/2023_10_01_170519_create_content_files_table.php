<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_files', function (Blueprint $table) {
            $table->uuid('uuid')->primary()->unique();
            $table->foreignUuid('content_id');
            $table->string('original_name');
            $table->string('name');
            $table->string('extension');
            $table->string('category');
            $table->string('url')->nullable();
            $table->boolean('is_publish')->default(true);
            $table->string('created_by', 50);
            $table->string('updated_by', 50);
            $table->timestamps();

            $table->index(['is_publish', 'content_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_files');
    }
}
