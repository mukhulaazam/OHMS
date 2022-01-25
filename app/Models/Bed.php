<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function bed_category()
    {
        return $this->hasOne(BedCategory::class,'id')->select(['id','name','des']);
    }
}
