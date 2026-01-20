<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('news', function (Blueprint $table) {
            // Tambahkan kolom setelah id
            $table->string('title')->after('id');
            $table->string('slug')->unique()->after('title');
            $table->text('excerpt')->nullable()->after('slug');
            $table->longText('content')->after('excerpt');
            $table->string('image')->nullable()->after('content');
            $table->foreignId('category_id')->nullable()->after('image');
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft')->after('category_id');
            $table->timestamp('published_at')->nullable()->after('status');
            $table->integer('views')->default(0)->after('published_at');
            
            // Tambahkan index untuk performa
            $table->index('status');
            $table->index('published_at');
            $table->index('slug');
        });
    }

    public function down(): void
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropIndex(['status']);
            $table->dropIndex(['published_at']);
            $table->dropIndex(['slug']);
            
            $table->dropColumn([
                'title',
                'slug',
                'excerpt',
                'content',
                'image',
                'category_id',
                'status',
                'published_at',
                'views'
            ]);
        });
    }
};