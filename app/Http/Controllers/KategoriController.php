<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Subkategori;
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
            'slug' => 'required',
            'icon' => 'required|file|max:800'
        ]);

        if($request->file('icon')){
            if($request->oldicon){
                Storage::delete($request->oldicon);
            }
            $data['icon'] = $request->file('icon')->store('public/icon');
        }
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
            'slug' => 'required',
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
        $subkategori = Subkategori::all();
        return view('admin.kategori.subkategori', [
            'subkategori' => $subkategori
        ]);
    }
}
