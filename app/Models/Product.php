<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'article',
        'name',
        'status',
        'data'
    ];

    public function scopeAvailable($query)
    {
        return $query->where('status', 'available');
    }
}
