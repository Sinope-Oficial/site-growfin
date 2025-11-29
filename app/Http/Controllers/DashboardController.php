<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the dashboard.
     */
    public function index()
    {
        $forms = Form::latest()->paginate(15);
        $totalForms = Form::count();
        $todayForms = Form::whereDate('created_at', today())->count();

        return view('dashboard.index', compact('forms', 'totalForms', 'todayForms'));
    }

    /**
     * Show a specific form.
     */
    public function show(Form $form)
    {
        return view('dashboard.show', compact('form'));
    }
}

