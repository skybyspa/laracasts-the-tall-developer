<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Models\Role;

class BookmarkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookmarks = Auth::user()->bookmarkedRoles()->get();
        return view('bookmarks', ['roles' => $bookmarks]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Role $role)
    {
        Auth::user()->bookmarkedRoles()->attach($role);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        Auth::user()->bookmarkedRoles()->detach($role);
        return back();
    }
}
