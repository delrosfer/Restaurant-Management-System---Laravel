@extends('employee/layouts/employeeLayout')

@section('title', 'Employee Home')

@section('main_content')

    <div class="container">
        <p class="display-4" style="padding-top:2rem;">Today's Summary</p>
        <hr>
        <div class="row">
            <div class="col-md-12 alerts">
                <div class="alert" role="alert">
                    <p>Total Tables: <span style="float:right;">10</span></p>
                </div>
                <div class="alert" role="alert">
                    <p>Total Customers: <span style="float:right;">10</span></p>
                </div>
                <div class="alert" role="alert">
                    <p>Total Revenue: <span style="float:right;">10</span></p>
                </div>
                <div class="alert" role="alert">
                    <p>Available Tables: <span style="float:right;">10</span></p>
                </div>
                <div class="alert" role="alert">
                    <p>Most Ordered Dish: <span style="float:right;">Perry Perry Chicken | Times: 10</span></p>
                </div>
                <div class="alert" role="alert">
                    <p>Least Ordered Dish: <span style="float:right;">Garlic Bread | Times: 2</span></p>
                </div>
            </div>
        </div>
    </div>

@endsection
