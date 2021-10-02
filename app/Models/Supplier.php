<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'suppliers';

    protected $fillable = ['product_id','name','email','phone','password','address','status'];

    public function ProductId(){
        return$this->belongsTo(Product::class,'product_id');
    }

}
