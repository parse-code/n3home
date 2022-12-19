<?php

namespace App\Http\Controllers;

use App\Models\Company;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function company($slug)
    {
        $company  = Company::where('slug', $slug)->firstOrFail();
        $products = $company->products()->with('specs')->get();
        return view('company.index')->with(compact('company', 'products'));
    }
}
