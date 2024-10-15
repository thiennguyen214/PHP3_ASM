<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'descrip',
        'subtitle',
        'price',
        'quantity',
        'quantity_sold',
        'img',
        'size_id',
        'category_id'
    ];
    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
