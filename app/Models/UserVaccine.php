<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVaccine extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'vaccine_id',
        'vac_status_id',
    ];

    public function vaccine()
    {
        return $this->belongsTo(Vaccine::class);
    }

    public function vac_status()
    {
        return $this->belongsTo(VacStatus::class);
    }
}
