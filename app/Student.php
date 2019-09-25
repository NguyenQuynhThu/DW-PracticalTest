<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    protected $primaryKey = 'id';
    protected $fillable = [
        "name",
        "email",
        "phone",
        "active",
        "created_at",
        "updated_at",
    ];
}
