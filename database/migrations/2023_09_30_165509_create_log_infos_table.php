<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogInfosTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('log_infos', function (Blueprint $table) {
      $table->uuid('uuid')->primary()->unique();
      $table->foreignUuid('foreign_id')->nullable();
      $table->string('module');
      $table->string('action');
      $table->text('desc')->nullable();
      $table->json('additional')->nullable();
      $table->string('ip')->nullable();
      $table->string('created_by', 50);
      $table->string('updated_by', 50);
      $table->timestamps();

      $table->index(['foreign_id', 'module', 'action']);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('log_infos');
  }
}
