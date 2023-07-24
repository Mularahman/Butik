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
            'code' => 'required|unique:kupons|string|max:10', // Ubah aturan validasi sesuai kebutuhan
            'description' => 'required|string',
            'type' => 'required|in:percentage,fixed',
            'amount' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'is_active' => 'boolean',
        ]);

        Kupon::create($request->all());

        return back()->with('success', 'Berhasil Menambah Data Kupon!' );
    }

    public function hapusKupon($id){
        $data = Kupon::FindOrfail($id);

        $data->delete();
        return redirect('/kupon-admin')->with('success', 'Berhasil Menghapus Data Kupon!');

    }

    public function editKupon($id, Request $request){
        $request->validate([
            'code' => 'required|unique:kupons,code,'.$id.'|string|max:10',
            'description' => 'required|string',
            'type' => 'required|in:percentage,fixed',
            'amount' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'is_active' => 'boolean',
        ]);

        $diskon = Kupon::findOrFail($id);
        $diskon->update($request->all());

        return redirect('/kupon-admin')->with('success', 'Berhasil Mengedit Data Kupon!');
    }
}
