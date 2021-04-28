<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'vac_center_id',
        'vaccine_id',
        'stock',
    ];

    public function vac_center()
    {
        return $this->belongsTo(VacCenter::class);
    }

    public function vaccine()
    {
        return $this->belongsTo(Vaccine::class);
    }
}
