<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use Notifiable;
    public $timestamps = false;
    protected $table = 'user';
    protected $fillable = [
        'userId',
        'name',
        'phone',
        'gender',
        'email',
        'password',
        'birthday',
    ];
}
