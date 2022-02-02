<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        // if
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('name', 'like', '%' . $filters['search'] . '%');
        // }

        // when
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
        });

        $query->when($filters['user'] ?? false, function ($query, $user) {
            return $query->whereHas('user', function ($query) use ($user) {
                $query->where('username', $user);
            });
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });
    }

    // category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
