<?php

namespace App\Components;

class CategoryRecursive {

    private $data;
    private $htmlSelects;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get Categories with Recursive
     * 
     * @return string
     */
    public function categoriesRecursive($parentId, $id = 0, $text = '') {
        foreach($this->data as $categorie) {
            if($categorie['parent_id'] == $id) {
                if(!empty($parentId) && $parentId == $categorie['id']) {
                    $this->htmlSelects .= '<option selected value="' . $categorie['id'] . '">' . $text . $categorie['name'] . '</option>';
                } else {
                    $this->htmlSelects .= '<option value="' .  $categorie['id'] . '">' . $text . $categorie['name'] . '</option>';
                }
                $this->categoriesRecursive($parentId, $categorie['id'], $text . '--');
            }
        }
        return $this->htmlSelects;
    }

}