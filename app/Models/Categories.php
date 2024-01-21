<?php

namespace App\Models;

use App\Http\Controllers\ProductsController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'img',
    ];
    public function Products()
    {
        return $this->hasMany(ProductsController::class);
        # code...
    }
}
