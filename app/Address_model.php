<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;


class Address_model extends Model
{
    protected $table = 'address';
    protected $id = 'id';
    protected $fillable = ['fullname', 'state', 'city', 'country','pincode','payment_type','user_id']; 
}
