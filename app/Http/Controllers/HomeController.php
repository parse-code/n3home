<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Company;
use App\Models\Spu;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
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
     * @return Renderable
     */
    public function index()
    {
        $spus = Spu::query()->where('company_id', request()->user()->company->id)->get();
        return view('home')->with(compact('spus'));
    }

    public function company($slug)
    {
        $company  = Company::where('slug', $slug)->firstOrFail();
        $products = $company->products()->with('specs')->get();
        return view('company.index')->with(compact('company', 'products'));
    }

    public function schedule()
    {
        $company      = auth()->user()->company;
        $appointments = Appointment::all();
        return view('admin.appointment.index')->with(compact('company', 'appointments'));
    }
}
