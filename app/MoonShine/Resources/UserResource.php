<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Fields\Text;
use MoonShine\Fields\Email;
use MoonShine\Fields\Password;
use MoonShine\Fields\Relationships\HasMany;


/**
 * @extends ModelResource<User>
 */
class UserResource extends ModelResource
{
    protected string $model = User::class;

    protected string $title = 'Users';

    public function indexFields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Name')->sortable(),
            Email::make('E-mail', 'email')->sortable(),
        ];
    }
 
    public function formFields(): array
    {
        return [
            ID::make(),
            Text::make('Name'),
            Email::make('E-mail', 'email'),
            Password::make('Password'),
        ];
    }
 
    public function detailFields(): array
    {
        return [
            Block::make([
                Text::make('Name'),
                Email::make('E-mail', 'email'),
                Password::make('Password'),
            ]),
            Block::make([
                HasMany::make('Communities', 'communities', resource: new CommunityResource())
            ]),
            Block::make([
                HasMany::make('Comments', 'comments', resource: new CommentResource())
            ]),
        ];
    }

    public function search(): array
    {
        return ['name', 'email'];
    }

    /**
     * @param User $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
