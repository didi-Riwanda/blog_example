<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $guarded = ['id'];

    public function tag(): BelongsTo{
        return $this->belongsTo(Tag::class, 'tags_id');
    }

    public function comment(): HasOne{
        return $this->hasOne(Comment::class);
    }

    public function comments(): HasMany{
        return $this->hasMany(Comment::class);
    }
}
