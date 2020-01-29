<?php

namespace App;

use App\Suplier;
use App\Customer;
use App\OrderDetails;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function OrderDetails(){
        return $this->hasMany(OrderDetails::class);
    }
    public function Customer(){
        return $this->belongsTo(Customer::class);
    }
    public function Supplier(){
        return $this->belongsTo(Suplier::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}
