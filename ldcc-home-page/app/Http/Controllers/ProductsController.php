<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('product.index');
    }

    public function productApiGateway()
    {
        return view('product.api_gateway');
    }

    public function productSaas()
    {
        return view('product.saas');
    }

    public function productBuilding()
    {
        return view('product.building');
    }

    public function productParking()
    {
        return view('product.parking');
    }
}
