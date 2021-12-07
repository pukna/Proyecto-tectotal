<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiaryBook extends Model
{
    protected $fillable = [ 'body','devit','credit'];
    use HasFactory;
}
