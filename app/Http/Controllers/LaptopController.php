<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;
use App\Models\Loker;

class LaptopController extends Controller
{
    public function showlaptop(){
        $laptops = Laptop::with('loker')->get();
        $lokers = Loker::all();

        return view('pages.laptop-siswa', compact('laptops','lokers'));
    }

    public function tambahlaptop(Request $request){
        $request->validate([
            'kode_laptop'=>'required|unique:laptops',
            'merk'=>'required',
            'loker'=>'required|exists:lokers,id'
        ]);
        
        Laptop::create([
            'kode_laptop' => $request->kode_laptop,
            'merk' => $request->merk,
            'loker_id' => $request->loker,
            'status' => 'tersedia'
        ]);

        return redirect('/laptop')->with('success', 'Data laptop berhasil ditambahkan');
    }
    
    public function destroy($id){
        Laptop::findOrFail($id)->delete();
        return redirect()->back()->with('hapus', 'Data Laptop berhasil dihapus');
    }
}
