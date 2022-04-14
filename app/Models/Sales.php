<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $fillable = [ 'fech','fechExpedition','toalPrice'];
    use HasFactory;
    public function detailPurchases()
    {
        return $this->hasMany('App\DetailPurchase');
    }
    public function detailSales()
    {
        return $this->hasMany('App\Article');
    }
    public function customers()
    {
        return $this->belongsTo('App\Customer');
    }
}
