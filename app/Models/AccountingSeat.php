<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountingSeat extends Model
{
    protected $fillable = [ 'body','devit','credit'];
    use HasFactory;
}
