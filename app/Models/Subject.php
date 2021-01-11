<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
/**
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}
