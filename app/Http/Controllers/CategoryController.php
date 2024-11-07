<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function  index()
    {
        return view('admin.category.add-category');
    }
    public function manageCategory()
    {
        return view('admin.category.manage-category',[
            'categories'=>Category::all()
        ]);
    }
    public function store(Request $request)
    {
//        return $request->file('image');
        Category::saveStudent($request);
        return redirect(route('manage.category'))->with('message','Category added successfully');
    }
    public function status($id)
    {
        Category::changeStatus($id);
        return redirect(route('manage.category'))->with('message','chage status successfully');

    }
}
