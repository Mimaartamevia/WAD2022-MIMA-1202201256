<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'no_hp',
    //     'password',
    // ];
    protected $guarded = ['id'];
}
// tiap Model dalam laravel mencerminkan atau mewakili nama tabel yang ada di database