<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;


    public $table = 'members';
    public $primaryKey = 'id';
    public $keyType = 'int';
    public $incrementing = true;
    public $timestamps = false;

    public $fillable = [
        'name', 'email'
    ];
}
