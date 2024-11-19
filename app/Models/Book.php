<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Traits\HasFileSrcAttribute;
use App\Models\Traits\HasImageSrcAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;
    use HasImageSrcAttribute;
    use HasFileSrcAttribute;

    protected $fillable = [
        'title',
        'author',
        'description',
        'file',
        'image',
        'user_id',
        'category_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'book_user_favorites', 'book_id', 'user_id');
    }
}
