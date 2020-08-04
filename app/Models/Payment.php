<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    public function vendor(){
        return $this->belongsTo(Vendor::class, 'vendors_id');
    }

}
