<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function addCategory(Request $request)
    {
      if ($request->isMethod('post')) {
        $data = $request->all();
        $category = new Category;
        $category->name = $data['category_name'];
        $category->parent_id = $data['parent_id'];
        $category->description = $data['description'];
        $category->url = $data['url'];
        $category->save();

        return redirect('/admin/view-categories')->with('PesanSukses','Kategori Berhasil Ditambah');
      }

      $levels = Category::where(['parent_id'=>0])->get();
      return view('admin.categories.add_category')->with(compact('levels'));
    }

    public function editCategory(Request $request, $id = null)
    {
      if ($request->isMethod('post')) {
        $data = $request->all();
        Category::where(['id'=>$id])->update([
          'name'=>$data['category_name'],
          'parent_id'=>$data['parent_id'],
          'description'=>$data['description'],
          'url'=>$data['url'],
        ]);
        return redirect('/admin/view-categories')->with('PesanSukses','Kategori Berhasil Diubah');
      }
      $categoryDetails = Category::where(['id'=>$id])->first();
      $levels = Category::where(['parent_id'=>0])->get();
      return view('admin.categories.edit_category')->with(compact('categoryDetails','levels'));
    }

    public function deleteCategory($id = null)
    {
      if (!empty($id)) {
        Category::where(['id'=>$id])->delete();
        return redirect()->back()->with('PesanSukses','Kategori Berhasil Dihapus');
      }
    }

    public function viewCategories()
    {
      $categories = Category::get();
      $categories = json_decode(json_encode($categories));
      return view('admin.categories.view_categories')->with(compact('categories'));
    }


}
