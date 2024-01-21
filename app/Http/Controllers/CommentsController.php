<?php

namespace App\Http\Controllers;

use App\Http\Resources\Comments as ResourcesComments;
use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Comments = Comments::all();
        return response()->json([
            'message' => 'Ok',
            'status' => Response::HTTP_OK,
            'data' => ResourcesComments::collection($Comments)
        ]);
    }
    public function review()
    {
        $Comments = Comments::orderBy('star', 'desc')->offset(0)->limit(3)->get();
        
        return response()->json([
            'message' => 'Ok',
            'status' => Response::HTTP_OK,
            'data' => ResourcesComments::collection($Comments)
        ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Comments $comments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comments $comments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comments $comments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comments $comments)
    {
        //
    }
}
