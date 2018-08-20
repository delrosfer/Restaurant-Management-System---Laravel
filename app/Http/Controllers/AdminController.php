<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ItemRequest;
use App\Item;
use App\Category;

class AdminController extends Controller
{
    public function home() {
        return view('admin.home');
    }

    public function newItem(Request $request) {
        $result = Category::all();

        return view('admin.items.new')
            ->with('categories', $result);
    }

    public function storeItem(ItemRequest $request) {

        //hanle file upload
        if($request->hasFile('itemImage')){
            //get file name with extension
            $fileNameWithExt = $request->file('itemImage')->getClientOriginalName();

            //get just file namespace
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('itemImage')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('itemImage')->storeAs('public/itemImages', $fileNameToStore);
        }
        else {
            $fileNameToStore = 'noimage.jpg';
        }


        $item = new Item();
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->quantity = $request->quantity;
        $item->category_id = $request->category;
        $item->item_image = $fileNameToStore;

        $item->save();
        return redirect()->route('admin.showItems');
    }

    public function editItem() {
        return view('admin.items.edit');
    }

    public function showItems() {
        $categories = Category::all();

        return view('admin.items.show')
            ->with('categories', $categories);
    }

    public function deleteItem() {
        return view('admin.items.delete');
    }
}
