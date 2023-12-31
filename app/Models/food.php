<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class food extends Model
{
    use HasFactory, HasApiTokens;

    protected $fillable = [
        'category',
        'name',
        'description',
        'status',
        'price',
        'img1',
    ];
    public function pictures()
    {
        return $this->belongsTo(picture::class);
    }
}
