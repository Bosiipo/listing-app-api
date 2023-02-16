<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'currency', 'name', 'slug', 'email', 'description', 'price', 
    // 'date_online', 'date_offline'
];

    // Relationship To Category
    public function category()
    {
        return $this->belongsTo(Category::class, "category_id");
    }

    // Relationship To User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
