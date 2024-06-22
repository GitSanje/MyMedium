<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;


    // Relationship to user model
    public function user(){
        return $this->belongsTo(User::class);
    }
}
