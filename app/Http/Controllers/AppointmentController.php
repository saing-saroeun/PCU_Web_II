<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function dentistAppointment()
    {
        return inertia('Appointments/Dentists');
    }

    public function patientAppointment()
    {
        return inertia('Appointments/Patients');
    }
}
