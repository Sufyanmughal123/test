<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{

    public function index()
    {
        return Category::with("services")->get();
    }
    public function store($data)
    {
        Category::create($data);
    }
    public function edit($id)
    {
        return Category::find($id);
    }
    public function update($data, $id)
    {
        $category = Category::find($id);
        $category->update($data);
    }
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
    }
}
