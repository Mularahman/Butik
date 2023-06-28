<?php

namespace App\Http\Controllers;

use App\Models\Kupon;
use Illuminate\Http\Request;

class KuponController extends Controller
{
    public function kupon()
    {
        $Kupon = Kupon::all();
        return view('admin.kupon.kupon',[
            'kupon' => $Kupon
        ]);
    }
    public function tambahKupon(Request $request){

        $data = $this->validate($request, [
            'kupon' => 'required',
            'diskon' => 'required',
            'validasi' => 'required',
            'status' => 'required',
        ]);

        Kupon::create([
            'kupon' => $data['kupon'],
            'diskon' => $data['diskon'],
            'validasi' => $data['validasi'],
            'status' => $data['status'],
        ]);

        return back()->with('success', 'Berhasil Menambah Data Kupon!' );
    }

    public function hapusKupon($id){
        $data = Kupon::FindOrfail($id);

        $data->delete();
        return redirect('/kupon-admin')->with('success', 'Berhasil Menghapus Data Kupon!');

    }

    public function editKupon($id, Request $request){
        $data = $this->validate($request, [
            'kupon' => 'required',
        ]);
        $update = Kupon::Find($id);

        $update->update($data);

        return redirect('/kupon-admin')->with('success', 'Berhasil Mengedit Data Kupon!');
    }
}
