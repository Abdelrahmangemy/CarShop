<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist_model extends Model
{
   protected $table = 'wishlists';
   protected $primaryKey = 'id';

   protected $fillable = ['user_id','pro_id'];
}
