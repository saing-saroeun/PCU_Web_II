<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DentistController extends Controller
{
    public function index()
    {
        return inertia('Dentist/Index');
    }

    public function create()
    {
        return inertia('Dentist/Create');
    }

    public function detail()
    {
        return inertia('Dentist/Detail');
    }
}
