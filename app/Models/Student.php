<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
class Student extends Model
{
    public function phoneRel(): HasOne
    {
        return $this->hasOne(Phone::class);
    }
}