<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    protected $fillable = [ 'name','unit'];
    use HasFactory;
    public function suppliers()
    {
        return $this->belongsToMany('App\Supplier');
    }
}
