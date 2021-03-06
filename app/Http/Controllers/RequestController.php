<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function customer($cpf) {

        $customer = \App\Customer::where('cpf', $cpf)->first();
        $customer->rating = $customer->rating();

        return \Response::json($customer);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function customers() {

        $customers = \App\Customer::all();

        return \Response::json($customers);
    }


}
