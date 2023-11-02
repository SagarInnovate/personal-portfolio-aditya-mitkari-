<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project_request extends Model
{
    protected $table = 'project_requests';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'phone', 'subject', 'category', 'project_description', 'assets_file'];
    use HasFactory;
}