<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurInformation extends Model
{
    use HasFactory;
    protected $table = 'our_information';
    protected $fillable = [
        'address',
        'email',
        'phone',
        'twitter',
        'facebook',
        'instagram',
        'linkedin',
        'google',
    ];
}
