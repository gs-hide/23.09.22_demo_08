<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 🔽 2行追加
use App\Models\Tweet;
use Auth;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

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
    // 🔽 編集（`store()` の `()` 内も異なるので注意）
      public function store(Tweet $tweet)
      {
        $tweet->users()->attach(Auth::id());
        return redirect()->route('tweet.index');
      }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
     // 🔽 編集（`destroy()` の `()` 内も異なるので注意）
      public function destroy(Tweet $tweet)
      {
        $tweet->users()->detach(Auth::id());
        return redirect()->route('tweet.index');
      }
}
