<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->uuid('uuid')->primary()->unique();
            $table->string('name')->unique();
            $table->string('slug');
            $table->boolean('is_publish');
            $table->smallInteger('max_capacity')->default(1);
            $table->string('created_by', 50);
            $table->string('updated_by', 50);
            $table->timestamps();

            $table->index(['is_publish', 'max_capacity']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sections');
    }
}
