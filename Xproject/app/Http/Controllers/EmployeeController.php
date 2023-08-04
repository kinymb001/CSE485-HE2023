<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $Employee = Employee::all();
        return view('Employee.index', compact($Employee));
    }

    public function create()
    {
        return view('Employee.create');
    }

    public function store(Request $request){
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->address = $request->address;
        $employee->salary = $request->salary;
        $employee->save();

        return redirect()->route('Employee.index')->with('success', 'Employee created successfully');
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);

        return view('Employee.edit', compact('employee'));
    }
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->name = $request->name;
        $employee->address = $request->address;
        $employee->salary = $request->salary;
        $employee->update();

        return redirect()->route('Employee.index')->with('success', 'Employee updated successfully');
    }
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('Employee.index')->with('success', 'Employee deleted successfully');
    }
}
