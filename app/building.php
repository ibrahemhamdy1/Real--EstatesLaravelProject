<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class building extends Model
{
    protected  $table="buildings";
    protected  $fillable=["id", "bu_name", "bu_price", "bu_rent", "bu_square", "bu_type", "bu_small_dis", "bu_meta", "bu_longitude", "bu_latitude", "bu_large_dis", "bu_status", "created_at", "updated_at", "user_id", "rooms"];
}

