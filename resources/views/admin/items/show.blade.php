@extends('admin.layouts.adminLayout')

@section('title', 'Admin Show Items')

@section('main_content')

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <p class="display-4">Showing items by Category..</p>
            </div>
            <div class="col-md-5">
                <form method="post" class="form-inline order-form">
                    <select class="input-group-text dropbar" id="inputGroupSelect01" name="searchBy">
                            <option selected>Search By...</option>
                            <option value="table_id">Table ID</option>
                            <option value="price">Price</option>
                            <option value="item">Item</option>
                    </select>
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn my-2 my-sm-0" type="submit">Search</button>
                </form>
                <div class="new-item">
                    <a href="{{route('admin.newItem')}}" class="btn my-2 my-sm-0 btn-lg" style="float:right;" type="submit"><i class="fa fa-plus"></i> New Item</a>
                </div>
            </div>
        </div>
        <hr>
          <div class="row">
              @foreach($categories as $category)
                @foreach($category->items as $item)
                <div class="col-md-3">
                    <div class="card" style="width: 15rem; margin-bottom: 2rem;">
                      <img class="card-img-top" src="/storage/itemImages/{{$item->item_image}}" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Category: {{$category->name}}</h5>
                        <p class="card-text">{{$item->name}}</p>
                        <p class="text-muted">{{$item->description}}</p>
                        <span class="h5">{{$item->price}}TK</span>
                        <button class="btn" style="float: right;"><i class="fas fa-plus"></i> Edit</button>
                      </div>
                    </div>
                </div>
                @endforeach
              @endforeach
              <!-- <div class="col-md-3">
                  <div class="card" style="width: 15rem; margin-bottom: 2rem;">
                    <img class="card-img-top" src="/images/pizza.png" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Pizza</h5>
                      <p class="card-text">Mashroom and pepparoni topings with added mozzarella</p>
                      <p class="text-muted">this is some muted text</p>
                      <span>350TK</span>
                      <button class="btn" style="float: right;"><i class="fas fa-plus"></i> Edit</button>
                    </div>
                  </div>
              </div> -->
          </div>
    </div>

@endsection
