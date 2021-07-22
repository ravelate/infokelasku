<?php

namespace App\Http\Controllers;
use App\Models\Materi;
use App\Models\User;
use App\Models\Kelas;
use Illuminate\Http\Request;

class MateriManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataMateri= Materi::get();
            $dataKelas = Kelas::get();
            $dataUser = User::get()->where('role','1');
        return view('admin/materimanage')->with(compact('dataMateri','dataKelas','dataUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::get()->where('role','1');
        $kelas = Kelas::get();
        return view('admin/crud/tambahmaterimanage')->with(compact('user','kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_materi' => 'required',
            'gambar' => 'required',
            'dibuat_oleh' => 'required',
            'youtube' => 'required',
            'kelas_id' => 'required',
        ]);
        Materi::create($validated);
        return redirect('/admin/materimanage')->with('success', 'materi Create successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Materi $materi)
    {
        
        $user = User::get()->where('role','1');
        $kelas = Kelas::get();
        return view('admin/crud/editmaterimanage')->with(compact('user','kelas','materi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {   
        $validated = $request->validate([
            'id' => 'required',
            'nama_materi' => 'required',
            'gambar' => 'required',
            'dibuat_oleh' => 'required',
            'youtube' => 'required',
            'kelas_id' => 'required',
        ]);
        $materi = Materi::findOrFail($request->id);
        $materi->update($request->all());
        return redirect('/admin/materimanage')->with('success', 'materi update successfully.');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materi $materi)
    {
        $materi->delete();
        return redirect('/admin/materimanage')->with('success', 'Materi Delete successfully.');
    }
}