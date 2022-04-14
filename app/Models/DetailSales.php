<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailSales extends Model
{
    protected $fillable = [ 'amount','price'];
    use HasFactory;
    public function articles()
    {
        return $this->belongsTo('App\Article');
    }
    public function sale()
    {
        return $this->belongsTo('App\Sales');
    }
}
