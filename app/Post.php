<?php

namespace App;

use Carbon\Carbon;
use App\User;

class Post extends Model
{
    //protected $fillable = ['title', 'body'];
    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
    	$this->comments()->create(compact('body'));
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, $filters)
    {
         if ($filters['month'])
        {
            $month = $filters['month'];
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($filters['year'])
        {
            $year = $filters['year'];
            $query->whereYear('created_at', $year);
        }
    }

}


