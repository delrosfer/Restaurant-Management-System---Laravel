@extends('employee/layouts/employeeLayout')

@section('title', 'Employee Tables')

@section('main_content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <p class="display-4">
                    Listing All Tables..
                </p>
            </div>
            <div class="col-md-4 list-tables">
                <form class="form-inline">
                    <select class="input-group-text dropbar" id="inputGroupSelect01" name="searchBy">
                            <option selected>Search By...</option>
                            <option value="all">All Tables</option>
                            <option value="available">Available Tables</option>
                            <option value="occupied">Occupied Tables</option>
                    </select>
                    <button class="btn my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                      <thead>
                        <tr class="table-header table-row">
                          <th scope="col">Table ID</th>
                          <th scope="col">Status</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="table-row">
                          <th scope="row">1</th>
                          <td><span class="badge badge-pill badge-success">Available</span></td>
                          <td>
                              <button type="button" class="btn">
                                  Toggle Status
                              </button>
                          </td>
                        </tr>
                        <tr class="table-row">
                          <th scope="row">2</th>
                          <td><span class="badge badge-pill badge-danger">Occupied</span></td>
                          <td>
                              <button type="button" class="btn">
                                  Toggle Status
                              </button>
                          </td>
                        </tr>
                        <tr class="table-row">
                          <th scope="row">3</th>
                          <td>300</td>
                          <td>
                              <button type="button" class="btn">
                                  Toggle Status
                              </button>
                          </td>
                        </tr>
                        <tr class="table-row">
                          <th scope="row">4</th>
                          <td>300</td>
                          <td>
                              <button type="button" class="btn">
                                  Toggle Status
                              </button>
                          </td>
                        </tr>
                        <tr class="table-row">
                          <th scope="row">5</th>
                          <td>300</td>
                          <td>
                              <button type="button" class="btn">
                                  Toggle Status
                              </button>
                          </td>
                        </tr>
                      </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
