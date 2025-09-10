<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $fillable = [
        'requester_id',
        'receiver_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
