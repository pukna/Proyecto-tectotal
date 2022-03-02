<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{

    protected $fillable = ['id', 'typeDocument','typeSuppliers','name','tradename','country','specialTaxpayer','telephone','mail','address'];
    use HasFactory;
}
