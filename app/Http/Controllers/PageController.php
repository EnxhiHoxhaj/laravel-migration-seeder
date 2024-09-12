<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trains;

class PageController extends Controller
{
    public function index() {
        return view('home');
    }
    public function timetable() {
        return view('timetable');
    }
}
