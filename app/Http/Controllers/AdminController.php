<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\ItemRequest;
use App\Http\Requests\EditItemRequest;
use App\Http\Requests\EditCategoryRequest;
use App\Http\Requests\CategoryRequest;
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

    public function editItem(Request $request) {
        $item = Item::findOrFail($request->id);
        $categories = Category::all();
        return view('admin.items.edit')
            ->with('item', $item)
            ->with('categories', $categories);
    }

    public function updateItem(EditItemRequest $request) {

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

        $item = Item::findOrFail($request->item_id);

        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->quantity = $request->quantity;
        $item->category_id = $request->category;
        if($request->hasFile('itemImage')){
            Storage::delete('public/itemImages/'. $item->item_image);
            $item->item_image = $fileNameToStore;
        }

        $item->save();
        return redirect()->route('admin.showItems');

    }

    public function showItems() {
        $categories = Category::all();

        return view('admin.items.show')
            ->with('categories', $categories);
    }

    public function removeItem(Request $request) {
        $item = Item::findOrFail($request->id);

        return view('admin.items.remove')
            ->with('item', $item);
    }

    public function deleteItem(Request $request) {
        $item = Item::findOrFail($request->item_id);
        Storage::delete('public/itemImages/'. $item->item_image);
        $item->delete();

        return redirect()->route('admin.showItems');
    }

    public function showCategories() {
        $categories = Category::all();

        return view('admin.categories.show')
            ->with('categories', $categories);
    }

    public function newCategory() {
        return view('admin.categories.new');
    }

    public function createCategory(CategoryRequest $request) {
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('admin.showCategories');
    }

    public function editCategory(Request $request){
        $category = Category::findOrFail($request->id);

        return view('admin.categories.edit')
            ->with('category', $category);
    }

    public function updateCategory(EditCategoryRequest $request) {
        $category = Category::findOrFail($request->category_id);
        $category->name = $request->name;
        $category->description = $request->description;

        $category->save();
        return redirect()->route('admin.showCategories');
    }

    public function removeCategory(Request $request) {
        $category = Category::findOrFail($request->id);
        return view('admin.categories.remove')
            ->with('category', $category);
    }

    public function deleteCategory(Request $request) {
        $category = Category::findOrFail($request->category_id);
        $category->delete();

        return redirect()->route('admin.showCategories');
    }
}
