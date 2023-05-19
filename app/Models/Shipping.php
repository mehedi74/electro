<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Shipping extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'address', 'city', 'country', 'zip_code', 'mobile'];

}
