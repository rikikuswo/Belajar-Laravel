<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // public function simpan(Request $request)
    // {
    //     $nama = $request->input('nama');
    //     $alamat = $request->input('alamat');
    //     return view('profil', ['nama' => $nama, 'alamat' => $alamat]);
    //     // return "Nama :" . $nama . " Alamat:" . $alamat;
    // }

    //Menampilkan data
    public function index()
    {
        $datauser = DB::table('users')->paginate(5); //Pagination
        return view('user.user', ['datauser' => $datauser]);
    }

    //Menampilkan form tambah data
    public function adddata()
    {
        return view('user.add');
    }

    //Proses tambah data
    public function saveData(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:5|max:20',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        DB::table('users')->insert([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect('/user');
    }

    //Menampilkan data yang akan diubah
    public function updateData($id)
    {
        $datauser = DB::table('users')->where('id', $id)->get();
        return view('user.edit', ['datauser' => $datauser]);
    }

    //Proses simpan update data
    public function saveUpdate(Request $request)
    {
        DB::table('users')->where('id', $request->id)->update([
            'name' => $request->nama,
            'email' => $request->email
        ]);
        return redirect('/user');
    }

    //Hapus data
    public function delete($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('/user');
    }

    //Pencarian data
    public function search(Request $request)
    {
        $cari = $request->cari;
        $search = DB::table('users')->where('name', 'like', '%' . $cari . '%')->paginate();
        return view('user.user', ['datauser' => $search]);
    }
}
