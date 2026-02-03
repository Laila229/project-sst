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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();

            $table->foreignId('company_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->foreignId('created_by')
              ->constrained('employees')
              ->cascadeOnDelete();

            $table->foreignId('printed_by')
              ->nullable()
              ->constrained('employees')
              ->nullOnDelete();

            $table->integer('printed_count')->default(0);
            $table->boolean('is_printed')->default(false);

             $table->string('phone');
            $table->string('governorate');
            $table->text('address');
            $table->string('product');
            $table->string('warranty_period');//مدة الكفالة
            $table->text('notes')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
