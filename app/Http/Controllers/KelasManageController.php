<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;

class KelasManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $kelas = Kelas::get();
       return view('admin/kelasmanage')->with(compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::get()->where('role','1');
        return view('admin/crud/tambahkelasmanage')->with(compact('user'));
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
            'nama_kelas' => 'required',
            'keterangan' => 'required',
            'dosen_pembimbing' => 'required',
        ]);
        Kelas::create($validated);
        return redirect('/admin/kelasmanage')->with('success', 'Kelas Create successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        $user = User::get()->where('role','1');
        return view('admin/crud/editkelasmanage')->with(compact('user','kelas'));
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
            'nama_kelas' => 'required',
            'keterangan' => 'required',
            'dosen_pembimbing' => 'required',
        ]);
        $kelas = Kelas::findOrFail($request->id);
        $kelas->update($request->all());
        return redirect('/admin/kelasmanage')->with('success', 'Kelas update successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function siswa($id)
    {
        $kelas = Kelas::with('users')->get()->where('id', $id);
        return view('admin/crud/lihatsiswakelasmanage')->with(compact('kelas'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        $kelas->delete();
        return redirect('/admin/kelasmanage')->with('success', 'Kelas Delete successfully.');
    }
}
