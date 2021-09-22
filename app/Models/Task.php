<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Task extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user',
        'title',
        'data',
        'completed',
    ];

    public function getDecryptedDataAttribute()
    {
        return Crypt::decryptString($this->attributes['data']);
    }
}
