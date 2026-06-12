<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //raw sql
        // $customers = DB::select('SELECT * FROM customers');
        // dd($customers);

        //Query Builder
        // $customers = DB::table('customers')->get();
        // dd($customers);

        //Eloquent ORM
        $customers = Customer::all();
        // dd($customers);
        return view('customers.list',compact('customers'));
    }

}
