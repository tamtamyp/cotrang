<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuController extends BackendController
{

    public function index(){
        $datas = Menu::latest('id')->orderBy('location','ASC')->get();
        return  view('admin.elements.menus.index', compact('datas'));
    }

    public function builder($id){
        $data = Menu::findOrFail($id);

        $menuitems = '';
        $desiredMenu = '';
        // $query = Menu::GetMenu();
        // if (!empty($id)) {
        //     $query->where('id', $id);
        // }
        // // $categories = Categories::all();
        // $datas = $query->orderBy('id', 'asc')->paginate(10);

        $desiredMenu = Menu::where('id', $id)->first();
        if ($desiredMenu == null) {
            return  view('admin.elements.menus.builder',  compact('id', 'menuitems', 'desiredMenu'));
        } else {
            if ($desiredMenu->content != '' && json_decode($desiredMenu->content) != null) {
                $menuitems = json_decode($desiredMenu->content);
                $menuitems = $menuitems[0];
                foreach ($menuitems as $menu) {
                    $menu->title = MenuItem::where('id', $menu->id)->value('title');
                    $menu->name = MenuItem::where('id', $menu->id)->value('name');
                    $menu->slug = MenuItem::where('id', $menu->id)->value('slug');
                    $menu->target = MenuItem::where('id', $menu->id)->value('target');
                    $menu->type = MenuItem::where('id', $menu->id)->value('type');
                    $menu->category_origin = MenuItem::where('id', $menu->id)->value('title');
                    if (!empty($menu->children[0])) {
                        foreach ($menu->children[0] as $child) {
                            $child->title = MenuItem::where('id', $child->id)->value('title');
                            $child->name = MenuItem::where('id', $child->id)->value('name');
                            $child->slug = MenuItem::where('id', $child->id)->value('slug');
                            $child->target = MenuItem::where('id', $child->id)->value('target');
                            $child->type = MenuItem::where('id', $child->id)->value('type');
                            $child->category_origin = MenuItem::where('id', $child->id)->value('title');
                            if (!empty($child->children[0])) {
                                foreach ($child->children[0] as $item) {
                                    $item->title = MenuItem::where('id', $item->id)->value('title');
                                    $item->name = MenuItem::where('id', $item->id)->value('name');
                                    $item->slug = MenuItem::where('id', $item->id)->value('slug');
                                    $item->target = MenuItem::where('id', $item->id)->value('target');
                                    $item->type = MenuItem::where('id', $item->id)->value('type');
                                    $item->category_origin = MenuItem::where('id', $item->id)->value('title');
                                }
                            }
                        }
                    }
                }
            } else {
                $menuitems = MenuItem::where('menu_id', $id)->get();
            }
            return  view('admin.elements.menus.builder',  compact('data', 'id', 'menuitems', 'desiredMenu'));
        }
        
    }
}
