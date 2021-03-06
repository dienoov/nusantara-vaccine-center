<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacCenter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'contact',
    ];

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
