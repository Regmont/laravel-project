<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Community;

use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Community>
 */
class CommunityResource extends ModelResource
{
    protected string $model = Community::class;

    protected string $title = 'Communities';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Name')->sortable(),
                BelongsTo::make('Theme', 'theme', 'title', new ThemeResource())->sortable(),
                BelongsTo::make('Author', 'user', 'name', new UserResource())->sortable(),
                Text::make('Description'),
                Switcher::make('Public', 'is_public')->default(true),
            ]),
        ];
    }

//    public function getActiveActions(): array
//    {
//        return ['view', 'delete', 'massDelete'];
//    }

    /**
     * @param Community $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
