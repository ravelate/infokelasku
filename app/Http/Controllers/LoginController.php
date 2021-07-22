<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        $role = Auth::user()->role;
        if($role == '1'){
            return view('admin/dashboard');
        }else {
            $kelas = Kelas::with('users')->get();
            $iduser=Auth::user()->id;
            return view('user/dashboard')->with(compact('kelas','iduser'));
        }
    }
    public function subscribe(Request $request) {
        Kelas::findOrfail($request->id)->users()->attach($request->user_id);
        return redirect('/dashboard')->with('success', 'Subscribe class successfully.');
    }
}
