<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    public function scopeOrder($query)
    {
        $query->orderBy('created_at' , 'desc');
    }

    public function movies()
    {
        return $this->hasMany(Movie::class , 'category_id');
    }


}
