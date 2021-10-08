<?php

namespace App\Http\Controllers\Content;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function create()
    {
        return view('employee.employee_register');
    }

    public function index()
    {
        $employees = Employee::latest()->paginate(10);
        return view('employee.employee_table', compact('employees'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function store(Request $req)
    {
        // User Validation
        $this->validate($req, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'title' => 'required|max:255',
            'work_department' => 'required|max:255',
            'gender' => 'required|in:male,female',
            'date_of_birth' => 'required|date|before:today',
            'salary' => 'required|numeric',
            'email' => 'required|email|max:255',
            'telephone' => 'required|min:11|numeric',
        ]);

        // Store to DB
        Employee::create([
            'first_name' => $req->first_name,
            'last_name' => $req->last_name,
            'title' => $req->title,
            'work_department' => $req->work_department,
            'gender' => $req->gender,
            'date_of_birth' => $req->date_of_birth,
            'salary' => $req->salary,
            'email' => $req->email,
            'telephone' => $req->telephone,
        ]);

        // Redirect
        return redirect()->route('employee')->with('status', 'Employee has been added');
    }

    public function show()
    {
        return view();
    }

    public function destroy($id)
    {
        DB::delete('delete from employees where id = ?', [$id]);

        // Redirect
        return redirect()->route('employee')->with('status', 'Employee has been deleted');
    }

    public function edit(Employee $emp)
    {
        return view();
    }

    public function update(Request $req, Employee $emp)
    {
        $emp->update($req->all());
    }

}
