<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FavouriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return auth()->user()->favourites()->paginate(20);
    }

    public function store(Request $request): JsonResponse
    {
        auth()->user()->favourites()->attach($request->product_id);

        return response()->json([
            'success' => true,
        ]);
    }
/*
 * TODO refactor responses. make standart format
 */
    public function destroy($favourite_id): JsonResponse
    {
        if (auth()->user()->hasFavourite($favourite_id)) {
            auth()->user()->favourites()->detach($favourite_id);

            return response()->json([
                'success' => true,
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Favourite does not exist in this user',
        ]);
    }
}
