<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [ 'fech','fechExpedition','totalPrice'];
    use HasFactory;

    public function detailPurchases()
    {
        return $this->hasMany('App\DetailPurchase');
    }
    public function detailSales()
    {
        return $this->hasMany('App\Article');
    }
    public function suppliers()
    {
        return $this->belongsToMany('App\Supplier');
    }
}
