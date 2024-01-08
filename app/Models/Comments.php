<?php

namespace App\Models;

use App\Http\Controllers\ProductsController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $fillable = [
        'comment',
        'name',
        'email',
        'blog_id',
    ];
    public function Products()
    {
        return $this->belongsTo(ProductsController::class);
        # code...
    }
}
