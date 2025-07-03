<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Number;
use MoonShine\Fields\Text;

/**
 * @extends ModelResource<Comment>
 */
class CommentResource extends ModelResource
{
    protected string $model = Comment::class;

    protected string $title = 'Comments';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                BelongsTo::make('Post', 'post', resource: new PostResource()),
                Number::make('Parent', 'parent_id'),
                BelongsTo::make('User', 'user', resource: new UserResource()),
                Text::make('Message'),
            ]),
        ];
    }

    /**
     * @param Comment $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
