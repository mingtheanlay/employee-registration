<?php

namespace App\Http\Controllers\Content;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeRegisterController extends Controller
{
    public function index() 
    {
        return view('employee.employee_register');
    }
}
