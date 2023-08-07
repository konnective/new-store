<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trolly extends Model
{
    use HasFactory;

    protected $fillable = ['item_id', 'user_id', 'quantity',];

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
