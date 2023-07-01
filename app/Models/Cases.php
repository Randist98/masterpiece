<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{

    protected $fillable = [
        'name',
        'description',
        'address',
        'beneficiary',
        'NoBeneficiary',
        'image' => 'default_image.jpg',
    ];
    use HasFactory;
}
