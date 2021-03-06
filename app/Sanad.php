<?php

namespace App;

use App\Customer;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Sanad extends Model
{
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
