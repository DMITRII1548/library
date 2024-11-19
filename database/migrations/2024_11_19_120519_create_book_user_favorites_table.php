<?php

declare(strict_types=1);

use App\Models\Book;
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
        Schema::dropIfExists('book_user_favorites');
        Schema::create('book_user_favorites', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Book::class)->index();
            $table->foreignIdFor(User::class)->index();
            $table->timestamps();

            $table->unique(['user_id', 'book_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_user_favorites');
    }
};
