<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'name',
    //     'slug',
    //     'description',
    //     'price',
    //     'currency',
    //     'email',
    //     'category'
    // ];

    // Relationship To User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeFilter($query, array $filters) {
        if($filters['category'] ?? false) {
            $query->where('categories', 'like', '%' . request('category') . '%');
        }

        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('categories', 'like', '%' . request('search') . '%');
        }
    }
}