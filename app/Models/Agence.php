<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Agence extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['nomAgence', 'address', 'email', 'telephone', 'password'];
}
