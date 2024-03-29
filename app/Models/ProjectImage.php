<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    use HasFactory;
    protected $table ='project_images';
    protected $fillable = [
        'image',
        'project_id',
    ];
}
