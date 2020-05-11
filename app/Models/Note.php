<?php

namespace App\Models;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
        'user_id', 'title', 'note',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
