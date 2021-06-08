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
        $name = $request->input('search');
        if (isset($user)) {
            $sources = Source::with(['users' => function ($q) use ($user) {
                return $q->where('users.id', $user->id);
            }]);

            if (isset($name)) {
                $sources->where('name', 'like', '%'.$name.'%');
            }
            $sources = $sources->get();

            foreach ($sources as $source) {
                if (count($source->users) > 0) {
                    $source->is_following = true;
                } else {
                    $source->is_following = false;
                }
                unset($source->users);
            }

            return $sources;
        } else {
            if (isset($name)) {
                return Source::where('name', 'like', '%'.$name.'%')->get();
            }
            return Source::all();
        }
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

    public function follow(Request $request)
    {
        $user = $request->user();
        if(!isset($request->source_id))
        {
            return response([
                'message' => 'source_id is required!'
            ], 422);
        }
        $source_id = $request->source_id;
        $source = Source::find($source_id);

        if(!$user->is_premium_member()) {
            return response([
                'message' => 'You are not a premium member!'
            ], 401);
        }
        
        if ($source->users())
            $source->users()->syncWithoutDetaching($user);

        return [
            'message' => 'Followed successfully.'
        ];
    }

    public function unfollow(Request $request)
    {
        $user = $request->user();
        if(!isset($request->source_id))
        {
            return response([
                'message' => 'source_id is required!'
            ], 422);
        }
        $source_id = $request->source_id;
        $source = Source::find($source_id);
        
        if(!$user->is_premium_member()) {
            return response([
                'message' => 'You are not a premium member!'
            ], 401);
        }

        if ($source->users())
            $source->users()->detach($user);

        return [
            'message' => 'Unfollowed successfully.'
        ];
    }
}
