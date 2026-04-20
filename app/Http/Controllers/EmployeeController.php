<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {
      $employees = employee::all();
      return view('employee.index', ['employees' => $employees]);
    }

    public function create() {
      return view('employee.create');
    }

    public function store() {
      request()->validate([
        'fname'=>['required', 'min:3'],
        'lname'=>['required', 'min:2'],
        'salary'=>['required'],
        'spec'=>['required']
      ]);

      employee::create([
        'fname'=>request('fname'),
        'lname'=>request('lname'),
        'salary'=>request('salary'),
        'spec'=>request('spec')
      ]);

      return redirect('/employee');
    }

    public function edit(employee $employee) {
      return view('employee.edit', ['employee'=>$employee]);
    }


    public function update(employee $employee) {
      request()->validate([
        'fname'=>['required', 'min:3'],
        'lname'=>['required', 'min:2'],
        'salary'=>['required'],
        'spec'=>['required']
      ]);

      $employee->update([
        'fname'=>request('fname'),
        'lname'=>request('lname'),
        'salary'=>request('salary'),
        'spec'=>request('spec')
      ]);

      return redirect('/employee');
    }

    public function destroy (employee $employee) {
      $employee->delete();
      return redirect('/employee');
    }
}
