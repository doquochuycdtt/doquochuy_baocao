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
        Schema::create('dqh_brand', function (Blueprint $table) {
            $table->id();
            $table->string('Name',1000);
            $table->string('slug',1000);
            $table->string('image')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->string('metakey');
            $table->string('metadesc');
            $table->unsignedInteger('created_by')->default(1);
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedTinyInteger('status')->default(2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dqh_brand');
    }
};
