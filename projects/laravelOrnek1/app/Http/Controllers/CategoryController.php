<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryCreateRequest;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller {
    public function create() {
        $parentCategories = Category::whereNull("parent_id")->get();
        return view("admin.category.create", compact('parentCategories'));
    }

    public function store(CategoryCreateRequest $request) {
        $data = $request->except('_token');
        $data['slug'] = Str::slug(!is_null($request->slug) ? $request->slug : $request->name);
        $data['status'] = isset($request->status) ? 1 : 0;
        $data['feature_status'] = isset($request->feature_status) ? 1 : 0;
        Category::create($data);
        return redirect()->route("admin.category.list");
    }

    public function list() {
        $list = Category::all();
        // dd($list);
        return view("admin.category.list", compact('list'));
    }
}
