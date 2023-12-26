<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InstructorController extends Controller
{
    public function dashboard(): View
    {
        return view('instructor.dashboard');
    }
}
