<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('user_id');

            $table->string('name', 80);
            $table->string('slug', 160);

            $table->text('body');
            $table->string('image')->nullable();

            $table->boolean('status')->default(false);
            $table->string('tags')->nullable();
            $table->string('seo_descripton')->nullable();
            $table->string('seo_keywords')->nullable();

            $table->integer('read_time')->default('0');
            $table->integer('view_count')->default('0');
            $table->integer('like_count')->default('0');

            $table->date('publish_date');
            $table->timestamps();

            $table->foreign('category_id')->references('id')
                ->on('categories')
                ->onDelete('cascade');

            $table->foreign('user_id')->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('articles');
    }
};
