<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function home() {
        return view('employee.home');
    }

    public function showOrders() {
        return view('employee.orders');
    }
}
