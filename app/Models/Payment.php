<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    public function vendor(){
        return $this->belongsTo(Vendor::class, 'vendors_id');
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
