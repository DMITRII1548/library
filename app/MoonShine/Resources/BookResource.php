<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Fields\File;
use MoonShine\Fields\Image;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Fields\Relationships\BelongsTo;

/**
 * @extends ModelResource<Book>
 */
class BookResource extends ModelResource
{
    protected string $model = Book::class;

    protected string $title = 'Книги';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Наименование', 'title'),
                Text::make('Автор', 'author'),
                Textarea::make('Описание', 'description'),
                File::make('Книга в pdf', 'file')
                    ->dir('books'),
                Image::make('Обложка', 'image')
                    ->dir('images/books'),
                BelongsTo::make('Категория', 'category', resource: new CategoryResource()),
            ]),
        ];
    }

    public function indexFields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Наименование', 'title'),
                Text::make('Автор', 'author'),
                Image::make('Обложка', 'image')
                    ->dir('images/books'),
                BelongsTo::make('Категория', 'category', resource: new CategoryResource()),
            ]),
        ];
    }

    /**
     * @param Book $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'required|string|max:5000',
            'file' => [$this->getModel() ? 'nullable' : 'required', 'file', 'mimes:pdf'],
            'image' => [$this->getModel() ? 'nullable' : 'required', 'image'],
            'category_id' => 'required|integer'
        ];
    }
}
