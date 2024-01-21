<?php

namespace App\Http\Controllers;

use App\Http\Resources\Comments as ResourcesComments;
use App\Http\Resources\ProductsResource;
use App\Models\Comments;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Products = Products::all();
        return response()->json([
            'message' => 'Ok',
            'status' => Response::HTTP_OK,
            'data' => ProductsResource::collection(Products::all())
        ]);
        //
    }

    public function popular()
    {
        $products = Products::orderBy('star', 'desc')->offset(0)->limit(10)->get();
        return response()->json([
            'message' => 'Ok',
            'status' => Response::HTTP_OK,
            'data' => ProductsResource::collection($products)
        ]);
        # code...
    }
    public function newest()
    {
        $products = Products::orderBy('created_at', 'desc')->offset(0)->limit(20)->get();
        
        return response()->json([
            'message' => 'Ok',
            'status' => Response::HTTP_OK,
            'data' => ProductsResource::collection($products)
        ]);
        # code...
    }
    
    public function Pcomments($id)
    {
        $comments = Comments::all()->where('product_id',$id);
        return response()->json([
            'message' => 'Ok',
            'status' => Response::HTTP_OK,
            'data' => ResourcesComments::collection($comments)
        ]);
        # code...
    }

    public function offered()
    {
        $products = Products::orderBy('offer', 'desc')->offset(0)->limit(10)->get();
        
        return response()->json([
            'message' => 'Ok',
            'status' => Response::HTTP_OK,
            'data' => $products
        ]);
        # code...
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
    public function show(Products $products,$id)
    {

        $Products = Products::findOrFail($id);
        return response()->json([
            'message' => 'Ok',
            'status' => Response::HTTP_OK,
            'data' => $Products
        ]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products)
    {
        //
    }
}
