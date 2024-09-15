<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trains;
use App\Models\VacationPlans;

class PageController extends Controller
{
    public function index() {
        return view('home');
    }
    public function timetable() {
        $trains= Trains:: all();
        // dd($trains);
        return view('timetable', compact('trains'));

    }

    public function vacation_plan() {
        $vacation_plan= VacationPlans:: all();
        return view('vacation_plan', compact('vacation_plan'));

    }
}
