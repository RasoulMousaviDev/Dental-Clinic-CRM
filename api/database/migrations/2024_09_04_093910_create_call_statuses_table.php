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
        Schema::create('call_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('value');
            $table->string('desc');
            $table->enum('severity', ['primary', 'secondary', 'success', 'info', 'warn', 'danger', 'contrast']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('call_statuses');
    }
};
