<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loker;

class LokerController extends Controller
{
    public function showloker(){
        $lokers = Loker::all();
        return view('pages.data-loker', compact('lokers'));
    }

    public function tambahloker(Request $request){
        $request->validate([
            'code_loker'=>'required',
            'kapasitas'=>'required'
        ]);

        Loker::create([
            'kode_loker'=>$request->code_loker,
            'kapasitas'=>$request->kapasitas
        ]);

        return redirect('/loker')->with('success', 'Data loker berhasil ditambahkan');
    }

    public function destroy($id){
        Loker::findOrFail($id)->delete();
        return redirect()->back()->with('hapus', 'Data Loker berhasil dihapus');
    }
}
