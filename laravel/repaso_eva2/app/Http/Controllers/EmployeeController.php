<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee; //importo el modelo

class EmployeeController extends Controller
{
    public function index()
    {
        $employeeList = Employee::all();
        return view('employee.all', ['employeeList'=>$employeeList]); //nos envía a employee.all y le pasamos el array correspondiente
    }

    public function create()
    {
        return view('employee.form'); //cuando le damos a crear, nos envía al formulario
    }

    public function store(Request $r)
    {
        $p = new Employee();
        $p->name = $r->name;
        $p->surname = $r->surname;
        $p->department = $r->department;
        $p->functions = $r->functions;
        $p->save();
        return redirect()->route('employee.index'); //Nos manda a la función index
    }

    public function show(string $id)
    {
        $p = Employee::find($id);
        $data['employee'] = $p;
        return view('employee.show', $data);
    }

    public function edit(string $id)
    {
        $employee = Employee::find($id);
        return view('employee.form', array('employee' => $employee));
    }

    public function update(Request $r, string $id)
    {
        $p = Employee::find($id);
        $p->name = $r->name;
        $p->surname = $r->surname;
        $p->department = $r->department;
        $p->functions = $r->functions;
        $p->save();
        return redirect()->route('employee.index');
    }

    public function destroy(string $id)
    {
        $p = Employee::find($id);
        $p->delete();
        return redirect()->route('employee.index');
    }
}
