<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('dajare_posts', function (Blueprint $table) {
    //         $table->id()->primary();
    //         $table->foreignId('user_id')->constrained();
    //         $table->text('text')->nullable();
    //         $table->string('image')->nullable();
    //         $table->integer('dajare_score');
    //         $table->integer('impression');
    //         $table->timestamps();
    //     });

    //     Schema::table('dajare_posts', function (Blueprint $table) {
    //         DB::statement('ALTER TABLE dajare_posts ADD CONSTRAINT chk_text_or_image CHECK (text IS NOT NULL OR image IS NOT NULL)');
    //     });
    // }

    // /**
    //  * Reverse the migrations.
    //  */
    // public function down(): void
    // {
    //     Schema::dropIfExists('dajare_posts');
    // }
};
