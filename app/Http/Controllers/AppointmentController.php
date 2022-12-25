<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Company;
use App\Models\Spu;

class AppointmentController extends Controller
{
    public function index($slug)
    {
        $company = Company::where('slug', $slug)->firstOrFail();
        $spus    = Spu::where('company_id', $company->id)->get();
        return view('appointment.index')->with(compact('company', 'spus'));
    }

    public function create($slug, $spu_id)
    {
        $spu = $this->getSpu($slug, $spu_id);
        return view('appointment.create')->with(compact('spu'));
    }

    public function store($slug, $spu_id)
    {
        $spu         = $this->getSpu($slug, $spu_id);
        $appointment = Appointment::create([
            'spu_id'       => $spu->id,
            'company_id'   => $spu->company_id,
            'scheduled_at' => request('date'),
            'status'       => 'pending',
            'user_id'      => request()->user()->id,
        ]);

        return redirect(route('appointment.show', $appointment));
    }

    private function getSpu($slug, $spu_id)
    {
        $company = Company::where('slug', $slug)->firstOrFail();
        return Spu::with('company')->where('company_id', $company->id)->findOrFail($spu_id);
    }

    public function show(Appointment $appointment)
    {
        return view('appointment.show')->with(compact('appointment'));
    }
}
