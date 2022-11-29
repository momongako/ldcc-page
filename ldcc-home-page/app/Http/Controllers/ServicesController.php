<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services.index');
    }

    public function serviceApplication()
    {
        return view('services.application');
    }

    public function serviceSystem()
    {
        return view('services.system');
    }

    public function serviceOffshore()
    {
        return view('services.offshore');
    }

    public function serviceErp()
    {
        return view('services.erp');
    }

    public function serviceCloud()
    {
        return view('services.cloud');
    }

    public function serviceData()
    {
        return view('services.data');
    }

    public function serviceSecurity()
    {
        return view('services.security');
    }
}
