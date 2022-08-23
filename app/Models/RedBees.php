<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RedBees extends Model
{
    use HasFactory;
    protected $table = "contactus";
    protected $primaryKey = "id";
    protected $fillable = [
        'message',
        'name',
        'email',
        'phone'
    ];
}
