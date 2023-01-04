<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class KaryawanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function manage()
    {
        $karyawan = Karyawan::paginate(20);
        return view('karyawan.manage', ['karyawans' => $karyawan]);
    }

    public function list()
    {
        $karyawan = Karyawan::paginate(20);
        return view('karyawan.list', ['karyawans' => $karyawan]);
    }

    public function detail($id)
    {
        $karyawan = Karyawan::find($id);

        // check if not found
        if (!$karyawan) {
            return redirect('/not-found');
        }

        return view('karyawan.detail', ['karyawan' => $karyawan]);
    }

    public function delete($id)
    {
        $karyawan = Karyawan::find($id);

        // check if not found
        if (!$karyawan) {
            return redirect('/not-found');
        }

        $karyawan->delete();
        return redirect('/karyawan/manage');
    }

    public function edit($id)
    {
        $karyawan = Karyawan::find($id);
        $departements = Departemen::all();

        // check if not found
        if (!$karyawan) {
            return redirect('/not-found');
        }


        return view('karyawan.edit', ['karyawan' => $karyawan, 'departements' => $departements]);
    }

    public function update(Request $request, $id)
    {
        $karyawan = Karyawan::find($id);

        // check if not found
        if (!$karyawan) {
            return redirect('/not-found');
        }

        $karyawan->update($request->all());
        $karyawan->save();

        return redirect('/karyawan/manage');
    }

    public function search(Request $request)
    {
        $q = $request->query->get('query');
        $karyawan = Karyawan::query()->where('nama', 'LIKE', "%{$q}%")->orWhere('email', 'LIKE', "%{$q}%")->paginate(20);
        return view('karyawan.list', ['karyawans' => $karyawan]);
    }

    public function add()
    {
        $departements = Departemen::all();

        return view('karyawan.tambah', ['departements' => $departements]);
    }

    public function create(Request $request)
    {
        Karyawan::create($request->all());

        return redirect('/karyawan/manage');
    }
}
