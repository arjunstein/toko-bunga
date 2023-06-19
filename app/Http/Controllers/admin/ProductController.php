<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'List Produk',
            'products' => Product::orderBy('id', 'asc')->get(),
        ];

        return view('admin/products/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Tambah Produk',
            'product' => product::orderBy('id', 'asc')->get(),
            'category' => Category::orderBy('id','asc')->get(),
        ];

        return view('admin/products/create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaProduk' => 'required|min:5|max:50',
            'slug' => 'string',
            'categoryId' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg|max:1024',
            'deskripsi' => 'string|min:5|max:100',
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/products', $gambar->hashName());

        $product = new Product();
        $product->namaProduk = $request->namaProduk;
        $product->slug = Str::slug($request->input('namaProduk'));
        $product->categoryId = $request->categoryId;
        $product->harga = $request->harga;
        $product->gambar = $gambar->hashName();
        $product->deskripsi = $request->deskripsi;
        $product->save();

        // dd($product);
        return redirect('admin/products')->with('success', 'Produk berhasil ditambahkan');
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
        $data = [
            'title' => 'Edit Produk',
            'category' => Category::orderBy('id', 'asc')->get(),
            'product' => Product::findOrFail($id),
        ];
        return view('admin/products/edit', $data);
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
        $request->validate([
            'namaProduk' => 'required|min:5|max:50',
            'categoryId' => 'required',
            'slug' => 'required',
            'harga' => 'required|integer',
            'deskripsi' => 'required|text|min:10|max:100',
            'gambar' => 'required',
        ]);

        if ($request->hasFile('gambar')) {

            //upload new image
           $gambar = $request->file('gambar');
           $gambar->storeAs('public/products', $gambar->getClientOriginalName());

            //delete old image
            $alat = Product::findOrFail($id);
            $path = storage_path('app/public/products/'.$alat->image);
            if (File::exists($path)) {
                File::delete($path);
            }



        } else {

        }
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
            $product = Product::findOrFail($id);
            $product->delete();

            return response()->json(['message' => 'Produk berhasil dihapus.']);

        } catch (\Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan saat menghapus data.'], 500);
        }
    }
}
