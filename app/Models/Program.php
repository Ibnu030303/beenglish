<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = ['course_id', 'name', 'description', 'image'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function siswas()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function details()
    {
        return $this->hasOne(Details::class);
    }

}
