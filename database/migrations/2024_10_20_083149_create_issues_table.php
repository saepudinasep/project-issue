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
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('detail_region_id')->constrained('detail_regions');
            $table->foreignId('user_id')->constrained('users');
            $table->date('tanggal');
            $table->time('jam');
            $table->foreignId('category_issue_id')->constrained('category_issues');
            $table->string('no');
            $table->text('details_issue');
            $table->text('solusi');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issues');
    }
};
