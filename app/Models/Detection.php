<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detection extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'SPH_R',
        'CYL_R',
        'AX_R',
        'SPH_L',
        'CYL_L',
        'AX_L',
        'IPD',
        'addition',
        'date',
        'doctor',
        'client_id'
    ];

    public function detections()
    {
        return $this->belongsTo('App\Models\Client');
    }
}
