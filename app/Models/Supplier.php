<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{

    protected $fillable = ['id', 'typeDocument','typeSuppliers','name','tradename','country','specialTaxpayer','telephone','mail','address'];
    use HasFactory;
    public function articles()
    {
        return $this->belongsToMany('App\Article');
    }
    public function services()
    {
        return $this->belongsToMany('App\Services');
    }
    public function purchases()
    {
        return $this->belongsToMany('App\Purchase');
    }

}
