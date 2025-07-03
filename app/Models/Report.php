<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Report extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'id_user',
        'date',
        'check_in',
        'picture_in',
        'check_out',
        'picture_out',
        'address_in',
        'address_out',
        'address_lembur',
        'overtime_reason',
        'overtime',
        'latitude_in',
        'longitude_in',
        'latitude_out',
        'longitude_out',
        'latitude_lembur',
        'longitude_lembur',
        'address_in',
        'address_out',
        'address_lembur',
        'id_tl'
    ];

    public function grup()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
