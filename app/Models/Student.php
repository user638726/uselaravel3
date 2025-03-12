<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Student extends Model
{
    public function phoneRelation(): HasOne
    {
        return $this->hasOne(Phone::class);


    }
    public function comments(): HasMany
    {
        return $this->hobby(Comment::class);
    }
}