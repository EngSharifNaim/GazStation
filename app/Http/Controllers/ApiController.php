<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class ApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getCustomer()
    {
        $cust = Customer::all();
        return $cust;
    }
}
