<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Kategori Bunga',
            'category' => Category::orderBy('id','asc')->get(),
        ];

        return view('admin/categories/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Tambah Kategori Bunga',
        ];

        return view('admin/categories/create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'categoryName' => 'required|string|max:30|min:10',
            ]);

            $category = new Category;
            $category->categoryName = $request->categoryName;
            $category->created_at = Carbon::now();
            $category->save();

            // dd($category);

            return redirect('admin/categories')->with('success','Kategori berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $data = [
            'title' => 'Edit Kategori Bunga',
            'category' => $category
            ];

            return view('admin/categories/edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'categoryName' => 'required|string|max:50|min:3',
            ]);

            $category = Category::findOrFail($id);
            $category->categoryName = $request->categoryName;
            $category->updated_at = Carbon::now();
            $category->update();

            // dd($category);

            return redirect('admin/categories')->with('success','Kategori berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $category = Category::findOrFail($id);
            $category->delete();
            // dd($category);
            return response()->json(['message' => 'Data berhasil dihapus.']);

        } catch (\Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan saat menghapus data.'], 500);
        }
    }
}
