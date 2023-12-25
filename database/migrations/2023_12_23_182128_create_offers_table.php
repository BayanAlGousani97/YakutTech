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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('type_website');
            $table->string('commercial_name');
            $table->string('client_name');
            $table->string('client_email');
            $table->string('client_phone');
            $table->string('color')->nullable();
            $table->string('domain');
            $table->string('server');
            $table->tinyInteger('status')->default(0); // 0: new, 1: approved, 2: rejected, 3: archived
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
