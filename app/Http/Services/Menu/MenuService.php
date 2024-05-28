<?php

namespace App\Http\Services\Menu;

use \App\Models\Menu;
use App\Models\User;

class MenuService
{

    public function gettaikhoan(){
        return User::where('id', '!=', 1)->get();
    }
    public function getParent(){
        return Menu::where('parent_id', 0)->get();
    }

    public function getAll(){
//        return Menu::where('id')->get();
        return Menu::orderbyDesc('id')->paginate(20);
    }

//    public function getall(){
//        return Menu::where('parent_id')->get();
//    }

    public function create($request){
        try {

            $request->except('_token');

            Menu::create($request->all());

//            Menu::create([
//                'name' => (string) $request->input('name'),
//                'parent_id' => (string) $request->input('parent_id'),
//                'description' => (string) $request->input('description'),
//                'content' => (string) $request->input('content'),
//                'menu_id' => (int) $request->input('menu_id'),
//                'active' => (string) $request->input('active'),
//
//            ]);

            $request->session()->flash('success', 'Thành công!!');

        } catch (\Exception $err) {
            $request->session()->flash('error', $err->getMessage());
            return false;
        }
        return true;
    }

    public function destroy($request){
        $id = $request->input('id');
        $menu = Menu::where('id', $id)->first();
        if ($menu){
            return Menu::where('id', $id)->orwhere('parent_id', $id)->delete();
        }
        return false;
    }

    public function update($request, $menu){
        try {
            $menu->fill($request->input());
            $menu->save();

            $request->session()->flash('success', 'Thành công!!');
        }catch (\Exception $err){
            $request->session()->flash('error', $err->getMessage());
            return false;
        }
        return true;
    }
}
