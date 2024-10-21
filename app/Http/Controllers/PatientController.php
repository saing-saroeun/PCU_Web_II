<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        return inertia('Patient/Index');
    }

    public function create()
    {
        return inertia('Patient/Create');
    }
}
