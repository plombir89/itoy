<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    const SUPER_ADMIN = 1;
    const ADMIN = 2;

    protected $table = 'roles';

    protected $fillable = ['name'];

}
