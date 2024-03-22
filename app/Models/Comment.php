<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment_content',
        'user_id',
        'blog_id',
        'parent_id',
    ];


    public function user()
    {
        return $this->belongsTo(Registration::class, 'user_id', 'id');
    }
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
