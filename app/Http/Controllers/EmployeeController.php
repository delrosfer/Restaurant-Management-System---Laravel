<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function home() {
        return view('employee.home');
    }

    public function showOrders() {
        return view('employee.orders.show');
    }

    public function editOrder() {
        return view('employee.orders.edit');
    }

    public function deleteOrder() {
        return view('employee.orders.delete');
    }

    public function newOrder() {
        return view('employee.orders.new');
    }

    public function showTables() {
        return view('employee.tables.show');
    }
}
