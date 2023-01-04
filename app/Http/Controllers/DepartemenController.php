<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use Illuminate\Http\Request;

class DepartemenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list()
    {
        $departements = Departemen::paginate(20);
        return view('departemen.list', ['departements' => $departements]);
    }

    public function add()
    {
        return view('departemen.tambah');
    }

    public function create(Request $request)
    {
        Departemen::create($request->all());

        return redirect('/departement');
    }

    public function delete($id)
    {
        $departement = Departemen::find($id);

        // check if not found
        if (!$departement) {
            return redirect('/not-found');
        }

        $departement->delete();
        return redirect('/departement');
    }

    public function edit($id)
    {
        $departement = Departemen::find($id);

        // check if not found
        if (!$departement) {
            return redirect('/not-found');
        }


        return view('departemen.edit', ['departement' => $departement]);
    }

    public function update(Request $request, $id)
    {
        $departement = Departemen::find($id);

        // check if not found
        if (!$departement) {
            return redirect('/not-found');
        }

        $departement->update($request->all());
        $departement->save();

        return redirect('/departement');
    }
}
