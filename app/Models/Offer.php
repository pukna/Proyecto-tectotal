<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [ 'type','nameCustumer','reference','expiration','name','body'];
    use HasFactory;
}
