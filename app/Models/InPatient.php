<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InPatient extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['serial_no'];

    public function getSerialNoAttribute()
    {
        return "INPAT" . "-" . sprintf("%05d", $this->attributes['id']);
    }
}
