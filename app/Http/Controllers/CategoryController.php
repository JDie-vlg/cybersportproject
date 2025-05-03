<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController
{
    public function getCategoryById($id){
        Category::$all();
        $category = Category::find($id);
    }
}
