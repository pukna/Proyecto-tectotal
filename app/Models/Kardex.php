<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kardex extends Model
{
    protected $fillable = [ 'type','fechIn','fechOut','amount','price'];
    use HasFactory;
}
