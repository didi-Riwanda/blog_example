<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tags';
    protected $guarded = ['id'];

    public function post(): HasMany{
        return $this->hasMany(Post::class);
    }
}
