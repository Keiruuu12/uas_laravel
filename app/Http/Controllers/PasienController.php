<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasiens = Pasien::orderBy('name')->paginate(5);
        return view('pasien.index', ['pasiens' => $pasiens]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        $validateData = $request->validate([
            'name' => 'required',
            'phone' => 'required|alpha_num|size:8',
            'address' => 'required',
        ]);
        
        
        Pasien::create($validateData);
        Alert::success("Berhasil", "Data $request->name Berhasil Di Tambahkan");
        return redirect(route('pasiens.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        return view('pasien.show', ['pasien' => $pasien]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        return view('pasien.edit', ['pasien' => $pasien]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'phone' => 'required|alpha_num|size:8',
            'address' => 'required',
        ]);

        $pasien->update($validateData);
        Alert::success("Berhasil", "Data $request->name Berhasil Di Update");
        return redirect(route('pasiens.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        Alert::success("Berhasil", "Data $pasien->name Berhasil Di Hapus");
        return redirect(route('pasiens.index'));
    }
}
