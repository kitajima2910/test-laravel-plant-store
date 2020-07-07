<?php

namespace App\Http\Controllers;

use App\Components\MenuRecursive;
use App\Http\Requests\AdminFormMenu;
use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminMenuController extends Controller
{

    private $menuRecursive;
    private $menu;

    public function __construct(MenuRecursive $menuRecursive, Menu $menu)
    {
        $this->menuRecursive = $menuRecursive;
        $this->menu = $menu;
    }

    public function index() {
        $menus = $this->menu->orderBy('id', 'desc')->paginate(5);
        $menusDeleteAt = DB::table('menus')->whereNotNull('deleted_at')->orderBy('id', 'desc')->get();
        return view('adminlte.menu.index', compact('menus', 'menusDeleteAt'));
    }

    public function ajaxIndex(Request $request) {
        
        if($request->ajax()) {
            $query = $request->get('query');

            $menus = Menu::where('id', 'like', '%' . $query . '%')
                                ->orWhere('name', 'like', '%' . $query . '%')
                                ->orWhere('slug', 'like', '%' . $query . '%')
                                ->orderBy('id', 'desc')
                                ->paginate(5);
            return view('adminlte.includes.menus-data', compact('menus'))->render();
        }
    }

    public function create() {

        $htmlOptions = $this->menuRecursive->menuRecursive();
        return view('adminlte.menu.add', compact('htmlOptions'));
    }

    public function store(AdminFormMenu $request) {

        $this->menu::insert([
            'name' => $request->get('name'),
            'parent_id' => $request->get('parent_id'),
            'slug' => Str::of($request->get('name'))->slug('-')
        ]);

        return redirect()->route('menus.index');

    }

    public function edit($id) {
        $menu = Menu::find($id);
        $htmlOptions = $this->menuRecursive->menuRecursive();
        return view('adminlte.menu.edit', compact('menu', 'htmlOptions'));
    }

    public function update(AdminFormMenu $request, $id) {
        $menu = Menu::find($id);
        $menu->name = $request->get('name');
        $menu->parent_id = $request->get('parent_id');
        $menu->slug = Str::of($request->get('name'))->slug('-');
        $menu->save();
        return redirect()->route('menus.index');
    }

    public function destroy($id) {
        $menu = Menu::find($id);
        $menus = Menu::all();
        foreach($menus as $item) {
            if($item['parent_id'] == $menu->id) {
                $item->delete();
            }
        }
        $menu->delete();
        return redirect()->route('menus.index');
    }

    public function enable($id) {
        DB::table('menus')->where('id', '=', $id)->update(['deleted_at' => null]);
        return redirect()->route('menus.index');
    }
}
