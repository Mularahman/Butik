<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Subkategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KategoriController extends Controller
{

    public function kategori()
    {
        $kategori = Kategori::all();
        return view('admin.kategori.kategori',[
            'kategori' => $kategori
        ]);
    }
    public function tambahkategori(Request $request){

        $data = $this->validate($request, [
            'kategori' => 'required',

            'icon' => 'required|file|max:800'
        ]);

        if($request->file('icon')){
            if($request->oldicon){
                Storage::delete($request->oldicon);
            }
            $data['icon'] = $request->file('icon')->store('public/icon');
        }
        $data['slug'] = Str::slug($request->kategori);
        Kategori::create([
            'kategori' => $data['kategori'],
            'slug' => $data['slug'],
            'icon' => $data['icon']

        ]);

        return back()->with('success', 'Berhasil Menambah Kategori!' );
    }

    public function hapuskategori($id){
        $data = Kategori::FindOrfail($id);
        if($data->icon){
            Storage::delete($data->icon);
        }
        $data->delete();
        return redirect('/kategori-admin')->with('success', 'Berhasil Menghapus Kategori!');

    }

    public function editkategori($id, Request $request){
        $data = $this->validate($request, [
            'kategori' => 'required',

            'icon' => 'required|file|max:800'
        ]);
        $update = Kategori::Find($id);
        if($request->file('icon')){
            if($request->oldicon){
                Storage::delete($request->oldicon);
            }
            $data['icon'] = $request->file('icon')->store('public/icon');
        }
        $update->update($data);

        return redirect('/kategori-admin')->with('success', 'Berhasil Mengedit Kategori!');
    }

    public function subkategori(){
        $kategori = Kategori::all();
        $subkategori = Subkategori::with('kategori')->get();

        return view('admin.kategori.subkategori', [
            'subkategori' => $subkategori,
            'kategori' => $kategori,
        ]);
    }

    public function tambahsubkategori(Request $request){

        $data = $this->validate($request, [
            'kategori_id' => 'required',
            'subkategori' => 'required'
        ]);

        Subkategori::create([
            'kategori_id' => $data['kategori_id'],
            'subkategori' => $data['subkategori']
        ]);
        return back()->with('success', 'Berhasil Menambah Sub Kategori!' );

    }

    public function hapussubkategori($id){
        $data = Subkategori::FindOrfail($id);
        $data->delete();

        return redirect('/sub_kategori-admin')->with('success', 'Berhasil Menghapus Sub Kategori!');
    }

    public function editsubkategori(Request $request, $id){

        $data = $this->validate($request,[
            'kategori_id' => 'required',
            'subkategori' => 'required'

        ]);

        $update = Subkategori::Find($id);
        $update->update($data);

        return redirect('/sub_kategori-admin')->with('success', 'Berhasil Mengedit Sub Kategori!');
    }
}
