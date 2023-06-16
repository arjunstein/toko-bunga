<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Kelola user',
            'user' => User::orderBy('id', 'asc')->get(),
        ];

        return view('admin/users/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data = [
        //     'title' => 'Add user',
        // ];

        // return view('admin/users/create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:50',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     // 'password' => 'required', 'string', 'min:8', 'confirmed',
        //     'whatsapp' => 'required|string|unique:users',
        //     'privilege' => 'required',
        //     'alamat' => 'required|string|min:20|max:255',
        // ]);

        // $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = bcrypt('12345');
        // $user->whatsapp = $request->whatsapp;
        // $user->privilege = $request->privilege;
        // $user->alamat = $request->alamat;
        // $user->save();

        // return redirect('admin/users')->with('sukses', 'User baru berhasil ditambahkan');
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
            'title' => 'Edit user',
            'user' => User::findOrFail($id),
        ];

        return view('admin.users.edit', $data);
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
            'name' => 'required|string|min:3|max:30',
            'email' => 'required|email',
            'whatsapp' => 'required|min:10|max:14',
            'alamat' => 'required|string|min:20|max:255',
            // 'password' => 'sometimes',
            'privilege' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->whatsapp = $request->whatsapp;
        $user->privilege = $request->privilege;
        $user->alamat = $request->alamat;
        $user->update();

        // dd($user);

        return redirect('admin/users')->with('sukses', 'Data berhasil diperbarui');
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
            $user = User::findOrFail($id);
            $user->delete();
            // dd($user);
            return response()->json(['message' => 'User berhasil dihapus.']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan saat menghapus data.'], 500);
        }
    }
}
