<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'time',
        'vac_center_id',
    ];

    public function vac_center()
    {
        return $this->belongsTo(VacCenter::class);
    }
}
