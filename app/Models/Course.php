<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function programs()
    {
        return $this->hasMany(Program::class);
    }

    public function instrukturs()
    {
        return $this->hasMany(Instruktur::class);
    }
}
