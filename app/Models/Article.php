<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [ 'name','condition','unit','body','catalogCode','amount'];
    use HasFactory;
    public function suppliers()
    {
        return $this->belongsToMany('App\Supplier');
    }
}
