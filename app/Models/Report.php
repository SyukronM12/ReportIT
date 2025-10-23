<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['title', 'content', 'location_id', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function reporter()
    {
        return $this->belongsTo(User::class, 'reporter_id');
    }
}
