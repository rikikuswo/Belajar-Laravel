<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function add()
    {
        return view('mahasiswa.add');
    }

    public function save_mahasiswa(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:5|max:20',
            'nim' => 'required',
            'alamat' => 'required'
        ]);
        Mahasiswa::create([
            'nama_mhs' =>  $request->nama,
            'nim' => $request->nim,
            'alamat' => $request->alamat
        ]);
        return redirect('/mahasiswa');
    }

    public function update($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.update', ['mahasiswa' => $mahasiswa]);
    }

    public function save_update($id, Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:5|max:20',
            'nim' => 'required',
            'alamat' => 'required'
        ]);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nama_mhs = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->save();
        return redirect('/mahasiswa');
    }

    public function delete($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa');
    }

    public function trash()
    {
        $mahasiswa = Mahasiswa::onlyTrashed()->get();
        return view('mahasiswa.trash', ['mahasiswa' => $mahasiswa]);
    }

    public function restore($id)
    {
        $mahasiswa = Mahasiswa::onlyTrashed()->where('id', $id);
        $mahasiswa->restore();
        return redirect('/mahasiswa/trash');
    }

    public function restore_all()
    {
        $mahasiswa = Mahasiswa::onlyTrashed();
        $mahasiswa->restore();
        return redirect('/mahasiswa/trash');
    }

    public function del_permanent($id)
    {
        $mahasiswa = Mahasiswa::onlyTrashed()->where('id', $id);
        $mahasiswa->forceDelete();
        return redirect('/mahasiswa/trash');
    }

    public function del_permanent_all()
    {
        $mahasiswa = Mahasiswa::onlyTrashed();
        $mahasiswa->forceDelete();
        return redirect('/mahasiswa/trash');
    }
}
