<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function slider()
    {
        $slider = Slider::all();
        return view('admin.slider.slider',[
            'slider' => $slider
        ]);
    }
    public function tambahslider(Request $request){

        $data = $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
            'status' => 'required',
            'image' => 'required|file|max:800'
        ]);

        if($request->file('image')){
            if($request->oldimage){
                Storage::delete($request->oldimage);
            }
            $data['image'] = $request->file('image')->store('public/image');
        }
        slider::create([
            'judul' => $data['judul'],
            'deskripsi' => $data['deskripsi'],
            'status' => $data['status'],
            'image' => $data['image']

        ]);

        return back()->with('success', 'Berhasil Menambah slider!' );
    }

    public function hapusslider($id){
        $data = slider::FindOrfail($id);
        if($data->image){
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('/slider-admin')->with('success', 'Berhasil Menghapus slider!');

    }

    public function editslider($id, Request $request){
        $data = $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
            'status' => 'required',
            'image' => 'required|file|max:800'
        ]);
        $update = slider::Find($id);
        if($request->file('image')){
            if($request->oldimage){
                Storage::delete($request->oldimage);
            }
            $data['image'] = $request->file('image')->store('public/image');
        }
        $update->update($data);

        return redirect('/slider-admin')->with('success', 'Berhasil Mengedit slider!');
    }
}
