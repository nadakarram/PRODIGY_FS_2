<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class employee extends Model
{
    use HasFactory ,HasRoles;
    
    protected $fillable = [
        'name',
        'email',
        'password',
        "phone_number",
        "age",
        "address",
        "image",
        "job_feild"
    ];
}
