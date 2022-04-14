<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPurchase extends Model
{

    protected $fillable = [ 'amount','price'];
    use HasFactory;
    public function purchase()
    {
        return $this->belongsTo('App\Purchase');
    }
    public function articles()
    {
        return $this->belongsTo('App\Article');
    }
}
