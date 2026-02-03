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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();

             $table->foreignId('company_id')
              ->constrained()
              ->cascadeOnDelete();

             $table->string('name');
             $table->string('phone')->nullable();
             $table->string('password');

             $table->boolean('can_create')->default(false);
             $table->boolean('can_print')->default(false); 
             $table->boolean('is_admin')->default(false); 
             $table->boolean('is_active')->default(true);

    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
