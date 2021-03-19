<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrainingController extends Controller
{
    //
    public function index()
    {
        $data = [
            'tbl_training'      => DB::table('tbl_training')->get()
        ];
        return view('admin.training.index', $data);
    }
    public function trainingTambah()
    {
        return view('admin.training.tambah');
    }
    public function trainingTambahProses(Request $request)
    {
        // dd($request->input('judul_uk'));
        $judul_uk = $request->input('judul_uk');
        dd($judul_uk);

        DB::table('tbl_training')->insert([
            'judul_uk'      => $request->input('judul_uk')
        ]);
        return redirect()->route('training')->with('success', 'Data berhasil disimpan');
    }
}
