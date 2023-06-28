<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function customer(){
        $customer = User::where('role', 'member')->get();

        return view('admin.Pelanggan.pelanggan',[
            'customer' => $customer
        ]);
    }

    public function tambahcustomer(Request $request){
        $customer = $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $customer['password'] = Hash::make($customer['password']);

        User::create([
            'name' => $customer['name'],
            'email' => $customer['email'],
            'password' => $customer['password'],
        ]);

        return back()->with('success', 'Berhasil Menambahkan Data Customer!');


    }

    public function hapuscustomer($id){
        $customer = User::FindOrfail($id);
        $customer->delete();

        return redirect('/customer-admin')->with('success', 'Berhasil Menghapus Data Customer!');
    }

    public function editcustomer(Request $request, $id){
        $customer = $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $update = User::FindOrfail($id);
        $update->update($customer);

        return redirect('/customer-admin')->with('success', 'Berhasil Mengedit Data Customer!');
    }

}
