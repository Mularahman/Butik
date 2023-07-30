<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Provinsi;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function provinsi()
    {

        $provinsi = Provinsi::all();
        return view('admin.wilayah.provinsi.provinsi',[
            'provinsi' => $provinsi
        ]);
    }
    public function tambahprovinsi(Request $request){

        $data = $this->validate($request, [
            'provinsi' => 'required',
        ]);

        Provinsi::create([
            'provinsi' => $data['provinsi'],
        ]);

        return back()->with('success', 'Berhasil Menambah Data Provinsi!' );
    }

    public function hapusprovinsi($id){
        $data = Provinsi::FindOrfail($id);

        $data->delete();
        return redirect('/provinsi-admin')->with('success', 'Berhasil Menghapus Data Provinsi!');

    }

    public function editprovinsi($id, Request $request){
        $data = $this->validate($request, [
            'provinsi' => 'required',
        ]);
        $update = Provinsi::Find($id);

        $update->update($data);

        return redirect('/provinsi-admin')->with('success', 'Berhasil Mengedit Data Provinsi!');
    }
    public function kota()
    {
        $kota = Kota::with('provinsi', 'kecamatans')->limit(10)->get();


        $provinsi = Provinsi::with('kotas', 'kecamatans')->get();
        return view('admin.wilayah.kota.kota',[
            'kota' => $kota,
            'provinsi' => $provinsi,
        ]);
    }
    public function tambahkota(Request $request){

        $data = $this->validate($request, [
            'provinsi_id' => 'required',
            'kota' => 'required',
        ]);

        Kota::create([
            'provinsi_id' => $data['provinsi_id'],
            'kota' => $data['kota'],
        ]);

        return back()->with('success', 'Berhasil Menambah Data Kota!' );
    }

    public function hapuskota($id){
        $data = kota::FindOrfail($id);

        $data->delete();
        return redirect('/kota-admin')->with('success', 'Berhasil Menghapus Data Kota!');

    }

    public function editkota($id, Request $request){
        $data = $this->validate($request, [
            'provinsi_id' => 'required',
            'kota' => 'required',
        ]);
        $update = Kota::Find($id);

        $update->update($data);

        return redirect('/kota-admin')->with('success', 'Berhasil Mengedit Data Kota!');
    }
    public function kecamatan()
    {
        $Kecamatan = Kecamatan::with('provinsi', 'kota')->get();
        $kota = Kota::with('provinsi', 'kecamatans')->get();
        $provinsi = Provinsi::with('kotas', 'kecamatans')->get();

        return view('admin.wilayah.Kecamatan.Kecamatan',[
            'provinsi' => $provinsi,
            'kota' => $kota,
            'kecamatan' => $Kecamatan,
        ]);
    }
    public function tambahkecamatan(Request $request){

        $data = $this->validate($request, [
            'provinsi_id' => 'required',
            'kota_id' => 'required',
            'kecamatan' => 'required',
        ]);

        Kecamatan::create([
            'provinsi_id' => $data['provinsi_id'],
            'kota_id' => $data['kota_id'],
            'kecamatan' => $data['kecamatan'],
        ]);

        return back()->with('success', 'Berhasil Menambah Data Kecamatan!' );
    }

    public function hapuskecamatan($id){
        $data = Kecamatan::FindOrfail($id);

        $data->delete();
        return redirect('/kecamatan-admin')->with('success', 'Berhasil Menghapus Data Kecamatan!');

    }

    public function editkecamatan($id, Request $request){
        $data = $this->validate($request, [
            'provinsi_id' => 'required',
            'kota_id' => 'required',
            'kecamatan' => 'required',

        ]);
        $update = Kecamatan::Find($id);

        $update->update($data);

        return redirect('/kecamatan-admin')->with('success', 'Berhasil Mengedit Data Kecamatan!');
    }
}
