<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resume extends Model
{
    protected $table = 'resumes';
    protected $primaryKey = 'id';
    protected $fillable = ['resume'];

    use HasFactory;
}