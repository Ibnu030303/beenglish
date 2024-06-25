<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class details extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_id',
        'registration_fee',
        'monthly_fee',
        'student_ebook_fee',
        'tshirt_fee',
        'meeting_frequency'
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
