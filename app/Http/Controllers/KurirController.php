<?php

namespace App\Http\Controllers;

use App\Models\Kurir;
use Illuminate\Http\Request;

class KurirController extends Controller
{
    //
    public function kurir(){
        $kurir = Kurir::all();
        return view('admin.kurir.kurir',[
            'kurir' => $kurir
        ]);
    }

    public function tambahkurir(Request $request){
        $data = $request->validate([
            'kurir' => 'required'
        ]);

        Kurir::create([
            'kurir' => $data['kurir']
        ]);
        return back()->with('success', 'Berhasil Menambah Data Kurir!' );
    }

    public function hapuskurir(Request $request, $id){
        $data = Kurir::findOrFail($id);

        $data->delete();
        return redirect('/kurir-admin')->with('success', 'Berhasil Menghapus Data Kurir!');
    }

    public function editkurir(Request $request, $id){
        $data = $request->validate([
            'kurir' => 'required'
        ]);
        $update = Kurir::findOrFail($id);
        $update->update($data);
        return redirect('/kurir-admin')->with('success', 'Berhasil Mengedit Data Kurir!');
    }
}
