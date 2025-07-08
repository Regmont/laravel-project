<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\Models\Post;
use App\Models\Theme;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): Factory|Application|View
    {
        $posts = Post::all();
        $communities = Community::all();
        $themes = Theme::all();

        return view(
            'index',
            compact(
                'posts',
                'communities',
                'themes'
            )
        );
    }
}
