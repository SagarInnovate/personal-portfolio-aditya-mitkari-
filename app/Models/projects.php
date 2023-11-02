<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'id';
    protected $fillable = ['project_title', 'project_img', 'str_url', 'description', 'category', 'technologies_used', 'tags', 'github', 'url_no_url', 'main_url', 'project_files', 'date'];
    use HasFactory;
}