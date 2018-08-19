@extends('layouts/default')

@section('title', 'Login Page')

@section('login')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('main_content')

    <div class="container-fluid background">
        <p class="display-2 header">Bill the Butcher's Restaurant</p>
        <div class="row">
            <div class="col-md-5 login-box col-sm-5">
                <p class="h3">Login with your email and password</p>
                <form>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                  </div>
                  <button type="submit" class="btn">Login</button>
                </form>
            </div>
        </div>
    </div>

@endsection
