<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('common_posts', function (Blueprint $table) {
            $table->id()->primary();
            $table->foreignId('user_id')->constrained();
            $table->string('text')->nullable();
            $table->string('image')->nullable();
            $table->integer('impression');
            $table->timestamps();
        });

        DB::statement('ALTER TABLE common_posts ADD CONSTRAINT chk_text_or_image CHECK (text IS NOT NULL OR image IS NOT NULL)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('common_posts', function (Blueprint $table) {
            // カスタムチェック制約を削除
            if (Schema::hasColumn('common_posts', 'chk_text_or_image')) {
                $table->dropConstrainedForeignId('chk_text_or_image');
            }
        });
        Schema::dropIfExists('common_posts');
    }
};
