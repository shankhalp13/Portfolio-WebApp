<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable=[
        "title",
        "inbrief",
        "description",
        "b_image",
    ];
    // public function comments() {
    //     return $this->hasMany('App\Models\Comment', 'blog_id', 'id');
    // }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'blog_id', 'id');
    }
}
