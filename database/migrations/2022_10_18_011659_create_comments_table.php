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
    Schema::create('comments', function (Blueprint $table) {
      $table->id();
      $table->string('body');
      $table->foreignIdFor(App\Models\Share::class, 'share_id')->constrained('shares')->cascadeOnDelete();
      $table->foreignIdFor(App\Models\User::class, 'author_user_id')->constrained('users');
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
    Schema::dropIfExists('comments');
  }
};
