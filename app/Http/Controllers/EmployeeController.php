<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create(){
        return view('create');
    }
    // public function index(){
    //     $employees = Employee::all();
    //     return view('index', compact('employees')); // compact here mean create a associate array and put data from $employees in there
    // }
    public function store(Request $request){
        $employeedata = $request->validate([
            'name'     => 'required|string|max:20',
            'age'      => 'required|integer',
            'position' => 'required|string',
            'email'    => 'required|email',
            'salary'   => 'required|numeric'
        ]);
        Employee::create($employeedata);
     return redirect()->route('employee.index')->with('success', 'Employee created successful!');
    }
     public function edit(Employee $employee){
        return view('edit', ['employee' => $employee]);
    }
    public function update( Employee $employee,Request $request){
        $data = $request-> validate([
            'name'     => 'required|string|max:20',
            'age'      => 'required|integer',
            'position' => 'required|string',
            'email'    => 'required|email',
            'salary'   => 'required|numeric'
        ]);
        $employee -> update($data);
        return redirect() -> route('employee.index');
    }
    public function destroy(Employee $employee){
        $employee->delete();
        return redirect()-> route(('employee.index'));
    }
    // public function search(Request $request){
    //       $search = $request->search;
    //     $employees = Employee::when($search, function($query,$search){
    //         $query->where('name','like','%' . $search .'%');
    //     })->get();
    //     return view('employee.search', compact('employees', 'search'));
    // }
    public function index(Request $request)
{
    $search = $request->search;

    $employees = Employee::when($search, function ($query, $search) {
        $query->where('name', 'like', "%$search%");
    })->get();

    return view('index', compact('employees', 'search'));
}

}
