<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    // protected $guarded = [];

    protected $fillable = [
        'prod_name',
        'cat_id',
    ];
  
    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }
}
