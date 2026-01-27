<?php

namespace App\Http\Controllers;

use App\Models\Employee;

class StrukturController extends Controller
{
    public function index()
    {
        $employees = Employee::orderBy('name')->get();
        return view('struktur', compact('employees'));
    }
}
