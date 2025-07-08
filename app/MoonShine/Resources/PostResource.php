<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

use MoonShine\CKEditor\Fields\CKEditor;
use MoonShine\Fields\Image;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Fields\ID;

/**
 * @extends ModelResource<Post>
 */
class PostResource extends ModelResource
{
    protected string $model = Post::class;

    protected string $title = 'Post';

    public function indexFields(): array
    {
        return [
            ID::make(),
            Text::make('Title'),
            BelongsTo::make('User', 'user', 'name', resource: new UserResource()),
            BelongsTo::make('Community', 'community', 'name', resource: new CommunityResource()),
        ];
    }

    public function formFields(): array
    {
        return [
            ID::make(),
            Text::make('Title'),
            Image::make('Media')
                ->allowedExtensions(['jpg', 'jpeg', 'png'])
                ->dir('post_media')
                ->nullable()
                ->removable()
            ,
            CKEditor::make('Content'),
            BelongsTo::make('User', 'user', 'name', resource: new UserResource()),
            BelongsTo::make('Community', 'community', 'name', resource: new CommunityResource()),
        ];
    }

    public function detailFields(): array
    {
        return [
            Text::make('Title'),
            Image::make('Media'),
            CKEditor::make('Content'),
            BelongsTo::make('User', 'user', 'name', resource: new UserResource()),
            BelongsTo::make('Community', 'community', 'name', resource: new CommunityResource()),
        ];
    }

    /**
     * @param Post $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
