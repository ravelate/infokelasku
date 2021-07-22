<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use App\Models\Materi;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id) {
        $materi = Materi::get()->where('kelas_id',$id);
        return view('user/kelas')->with(compact('materi'));
    }
}
