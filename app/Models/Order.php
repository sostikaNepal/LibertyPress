<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $fillable = ['date','status','product_id','customer_id'];

    public function ProductId(){
        return$this->belongsTo(Product::class,'product_id');
    }
    public function CustomerId(){
        return$this->belongsTo(Customer::class,'customer_id');
    }

}
