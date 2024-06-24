<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.index');
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(CategoryFormRequest $request){
        $validatedData = $request -> validated();

        $category = new Category;
        $category->name = $validatedData['name'];
        $category->slug = $validatedData['slug'];

        $category->save();
        return redirect('dashboard');
    }

    public function edit(Category $category){
        return view('admin.category.edit', compact('category'));
    }

    public function update(CategoryFormRequest $request, $category){
        $validatedData = $request -> validated();

        $category = Category::findOrFail($category);

        $category->name = $validatedData['name'];
        $category->slug = $validatedData['slug'];

        $category->update();
        return redirect('dashboard');
    }

    public function delete(Category $category){
        $category->delete();
        return redirect('dashboard');
    }
}
