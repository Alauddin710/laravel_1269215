<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // akankar comments method ta index.blade.php te  @foreach ($post->comments as $comment )
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
