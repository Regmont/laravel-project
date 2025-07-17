<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\PostCreateRequest;
use App\Http\Requests\Post\PostUpdateRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(PostCreateRequest $request, User $user)
    {
        $data = $request->validated();

        $image = $data['media'];
        $imageName = Str::random(40) . '.' . $image->getClientOriginalExtension();// hbKJBHBhbhbjhb67687BJHvjtvtuy.jpeg
        $image->move(
            storage_path() . '/app/public/post_media',
            $imageName
        );
        $data['media'] = $imageName;

        $data['user_id'] = $user->id;

        $post = new Post($data);

        return $post->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostUpdateRequest $request, Post $post)
    {
       $data = $request->validated();
       return $post->update($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post): ?bool
    {
        return $post->delete();
    }
}
