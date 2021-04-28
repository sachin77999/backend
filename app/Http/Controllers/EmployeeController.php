<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function show()
    {
return DB::table('employee')
->join('company','employee.id',"=",'company.employee_id')
->where('company.name',"google")
->select('employee.*')
->get();
   // return "Hello from joins";
}
}
