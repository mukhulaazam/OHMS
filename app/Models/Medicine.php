<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Medicine extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function company():belongsTo
    {
        return $this->belongsTo(Company::class)->select('id','name','is_active');
    }
}
