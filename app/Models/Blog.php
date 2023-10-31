<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable = [
        'user_id',
        'cate_id',
        'titleImage',
        'title',
        'content',
        'lines'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    // public function comments()
    // {
    //     return $this->hasMany(Comment::class)->whereNull('parent_id');
    // }

    public function category()
    {
        return $this->belongsTo(Category::class,'cate_id','id');
    }
}
