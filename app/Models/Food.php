<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = ["category_id", "nama_makanan", "foto_makanan", "harga", "deskripsi", "stok"];

    public function category()
    {
    	return $this->belongsTo("\App\Models\Category");
    }
    public function rating()
    {
    	return $this->hasMany("\App\Models\Rating");
    }
 
}
