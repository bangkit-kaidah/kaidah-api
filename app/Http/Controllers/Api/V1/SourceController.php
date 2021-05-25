<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Source;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = auth('sanctum')->user();
        if(isset($user)) {
            return Source::with(['users' => function($q) use ($user) {
                return $q->where('users.id', $user->id);
            }])->get();
        }
        else return Source::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function show(Source $source)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Source $source)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function destroy(Source $source)
    {
        //
    }

    public function follow(Request $request, Source $source)
    {
        $user = $request->user();
        if ($source->users())
        $source->users()->syncWithoutDetaching($user);

        return [
            'message' => 'Followed successfully.'
        ];
    }

    public function unfollow(Request $request, Source $source)
    {
        $user = $request->user();
        if ($source->users())
        $source->users()->detach($user);

        return [
            'message' => 'Unfollowed successfully.'
        ];
    }
}
