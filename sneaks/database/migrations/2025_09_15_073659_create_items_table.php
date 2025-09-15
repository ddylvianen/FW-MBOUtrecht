<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2);
            $table->integer('stock')->default(0);

            $table->timestamps();
            $table->softDeletes();
            $table->string('comments')->nullable();
        });

        DB::table('items')->insert([
            [
                'name' => 'Sample Item 1',
                'description' => 'This is a description for Sample Item 1.',
                'price' => 19.99,
                'stock' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample Item 2',
                'description' => 'This is a description for Sample Item 2.',
                'price' => 29.99,
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample Item 3',
                'description' => 'This is a description for Sample Item 3.',
                'price' => 9.99,
                'stock' => 200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');

    }
};
