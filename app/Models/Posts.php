<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Services\TimeDifferenceService;
use Carbon\Carbon;

class Posts extends Model
{
    use HasFactory;
    protected $casts = [
        'publication_date' => 'datetime',
    ];
    protected $dates = ['publication_date'];
    

    public function getRouteKeyName(){
        return 'slug';
    }


    // Relationship to user model
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, array $filters){

        if($filters['search'] ?? false){
            $query -> where('title','like', '%' . request('search'). '%')
                 ->orwhere('content', 'like', '%' . request('search') . '%');
      
        }
      
    }

    // helper function to extract only first two sentence from the content
    public function getExerptAttribute()
    {
        $content = $this->content;
        $sentences = preg_split('/(?<=[.?!])\s+/', $content, -1, PREG_SPLIT_NO_EMPTY);
        return implode(' ', array_slice($sentences,0,2));
    }

    public function getTimeDifferenceAttribute()
    {
        $timeDifferenceService = app(TimeDifferenceService::class);

        return $timeDifferenceService->getDifference($this->publication_date);
    }
}


