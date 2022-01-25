<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BedCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function floors()
    {
        return $this->hasMany(BedFloor::class, 'id')->select(['id', 'name', 'des']);
    }
}
