<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::table('categories', function (Blueprint $table) {
            $table->renameColumn('seo_descripton', 'seo_description');
        });

        Schema::table('articles', function (Blueprint $table) {
            $table->renameColumn('seo_descripton', 'seo_description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::table('categories', function (Blueprint $table) {
            $table->renameColumn('seo_descripton', 'seo_description');
        });

        Schema::table('articles', function (Blueprint $table) {
            $table->renameColumn('seo_description', 'seo_descripton');
        });
    }
};
