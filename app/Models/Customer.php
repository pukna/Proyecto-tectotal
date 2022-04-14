<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [ 'name','address','email','phone','creditLimit'];
    use HasFactory;
    public function sales()
    {
        return $this->hasMany('App\Sales');
    }
}
