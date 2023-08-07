<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'price', 'stock', 'img', 'description'];

    //function for serach query
    public function scopeFilter($query, array $filter)
    {
        if ($filter['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('price', 'like', '%' . request('search') . '%');
        }
    }
}