<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $fillable = ["post_title", "post_content", "image", "description", "category", "tags", 'str_url'];
    use HasFactory;
}