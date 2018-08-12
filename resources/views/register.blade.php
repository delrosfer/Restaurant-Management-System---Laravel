@extends('layouts/master')

@section('title', 'Register')

@section('main_content')
    <!-- Navbar -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 bg-image">
                <!-- <img src="/images/background.jpg" class="bg-image"> -->
                <div class="row">
                    <div class="col-md-6 book-table">
                        <p class="display-3">Heading out tonight?</p>
                        <a href="#"><button type="button" class="btn btn-dark btn-lg book-button">Book a table now..</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 sign-up">
                <p class="display-3">Sign up now!</p>
                <hr>
                <form>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group col-md-12">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                  </div>
                    <div class="form-group">
                      <label for="gender">Gender</label>
                      <select id="inputState" class="form-control">
                        <option selected value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary" style="background-color: #050D26;">Sign up</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
@endsection
