<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guestbook extends Model
{
    use HasFactory;
    protected $with = ['user'];
    protected $fillable = [
        'message', 'is_pinned'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
