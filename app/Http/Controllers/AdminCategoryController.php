<?php

namespace App\Http\Controllers;

use App\Category;
use App\Components\CategoryRecursive;
use App\Http\Requests\AdminFormCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class AdminCategoryController extends Controller
{

    public function index() {
        $categories = Category::orderBy('id', 'desc')->paginate(5);
        $categoriesDeleteAt = DB::table('categories')->whereNotNull('deleted_at')->orderBy('id', 'desc')->get();
        return view('adminlte.category.index', compact('categories', 'categoriesDeleteAt'));
    }

    public function ajaxIndex(Request $request) {
        if($request->ajax()) {

            $query = $request->get('query');

            $categories = Category::where('id', 'like', '%' . $query . '%')
                                ->orWhere('name', 'like', '%' . $query . '%')
                                ->orWhere('slug', 'like', '%' . $query . '%')
                                ->orderBy('id', 'desc')
                                ->paginate(5);
            return view('adminlte.includes.categories-data', compact('categories'))->render();
        }
        
    }
    
    public function create() {
        $htmlOptions = $this->getCategories(null);
        return view('adminlte.category.add', compact('htmlOptions'));
    }

    public function store(AdminFormCategory $request) {
        $category = new Category([
            'name' => $request->get('name'),
            'parent_id' => $request->get('parent_id'),
            'slug' =>  Str::of($request->get('name'))->slug('-')
        ]);
        $category->save();
        return redirect()->route('categories.index');
    }

    public function edit($id) {
        $category = Category::find($id);
        $htmlOptions = $this->getCategories($category->parent_id);
        return view('adminlte.category.edit', compact('category', 'htmlOptions'));
    }

    public function update(AdminFormCategory $request, $id) {
        $category = Category::find($id);
        $category->name = $request->get('name');
        $category->parent_id = $request->get('parent_id');
        $category->slug = Str::of($request->get('name'))->slug('-');
        $category->save();
        return redirect()->route('categories.index');
    }

    public function destroy($id) {
        $category = Category::find($id);
        $categories = Category::all();
        foreach($categories as $item) {
            if($item['parent_id'] == $category->id) {
                $item->delete();
            }
        }
        $category->delete();
        return redirect()->route('categories.index');
    }

    public function enable($id) {
        DB::table('categories')->where('id', '=', $id)->update(['deleted_at' => null]);
        return redirect()->route('categories.index');
    }

    private function getCategories($parentId) {
        $categories = Category::all();
        $categoryRecursive = new CategoryRecursive($categories);
        return $categoryRecursive->categoriesRecursive($parentId);
    }

}
