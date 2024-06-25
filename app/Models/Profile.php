<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', // Add nama here
        'title',
        'deskripsi',
        'alamat',
        'telepon',
        'email',
        'logo',
    ];
}
