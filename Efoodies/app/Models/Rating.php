<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [ "comment"];

    public function food()
    {
        return $this->belongsTo("\App\Models\Food");
    }
    public function user()
    {
        return $this->belongsTo("\App\Models\User");
    }

}
