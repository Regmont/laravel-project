<?php

namespace App\Http\Controllers;

use App\Http\Requests\Community\CommunityUpdateRequest;
use App\Http\Requests\Community\CommunityCreateRequest;
use App\Models\Community;
use Illuminate\Support\Facades\Auth;

class CommunityController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommunityCreateRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::user()->getAuthIdentifier();

        $community = new Community($data);
        
        return $community->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Community $community)
    {
        return $community;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Community $community)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CommunityUpdateRequest $request, Community $community)
    {
        $data = $request->validated();

        return $community->update($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Community $community): ?bool
    {
        return $community->delete();
    }
}
