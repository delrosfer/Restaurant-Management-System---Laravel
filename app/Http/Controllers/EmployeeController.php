<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function home() {
        return view('employee.home');
    }

    public function showOrders() {
        return view('employee.orders.showOrders');
    }

    public function editOrder() {
        return view('employee.orders.editOrders');
    }

    public function deleteOrder() {
        return view('employee.orders.deleteOrders');
    }

    public function newOrder() {
        return view('employee.orders.newOrder');
    }

    public function showTables() {
        return view('employee.tables.showTables');
    }
}
