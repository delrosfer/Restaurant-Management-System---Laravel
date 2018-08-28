<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

use App\Table;
use App\Item;
use App\Category;
use App\Employee;



class EmployeeController extends Controller
{
    public function home() {
        $tables=Table::all();
        return view('employee.home')->with('tables', $tables);
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
        $tables = Table::all();

        return view('employee.tables.show')
        ->with('tables', $tables);
    }
    public function showCategories() {
        $categories = Category::all();

        return view('employee.categories.show')
        ->with('categories', $categories);
    }
    public function showItems() {
        $categories = Category::all();

        return view('employee.items.show')
            ->with('categories', $categories);
    }
    public function showProfile(Request $request) {
        $employee = $request->session()->get('employee');

        return view('employee.profile.show')
            ->with('employee', $employee);
    }
}
