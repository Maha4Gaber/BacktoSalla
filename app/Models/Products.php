<?php

namespace App\Models;

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CommentsController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $guarded=[];


    public function Categories()
    {
        return $this->belongsTo(CategoriesController::class);
        # code...
    }

    public function comments()
    {
        return $this->hasMany(CommentsController::class);
        # code...
    }
}
