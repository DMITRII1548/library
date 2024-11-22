<?php

declare(strict_types=1);

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->index();
            $table->string('author', 255)->index();
            $table->string('description', 5000);
            $table->string('file', 4096);
            $table->string('image', 4096);
            $table->foreignIdFor(User::class)
                ->nullable()
                ->index()
                ->onDelete('cascade');
            $table->foreignIdFor(Category::class)
                ->index()
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
