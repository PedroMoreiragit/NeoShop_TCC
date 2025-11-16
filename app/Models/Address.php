<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';

    protected $fillable = [
        'user_id',
        'street',
        'city',
        'state',
        'zip_code'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
