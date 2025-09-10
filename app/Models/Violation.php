<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Violation extends Model
{
    protected $table = 'violations';
    protected $fillable = [
        'user_id',
        'type',
        'description',
        'is_resolved',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
