<?php

namespace App\Components;

use App\Menu;

class MenuRecursive {

    private $htmlOptions;

    public function __construct()
    {
        $this->htmlOption = '';
    }

    public function menuRecursive($parent_id = 0, $subMark = '') {

        $menu = Menu::where('parent_id', $parent_id)->get();
        foreach($menu as $m) {
            $this->htmlOptions .= '<option value="' . $m->id . '">' . $subMark . $m->name . '</option>';
            $this->menuRecursive($m->id, $subMark . '--');
        }

        return $this->htmlOptions;
    }

}