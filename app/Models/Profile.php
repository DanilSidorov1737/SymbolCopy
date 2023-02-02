<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['Job', 'Country', "Phone", "Address", "Twitter", "Instagram", "LinkedIn", "image", "Facebook", "About" ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
