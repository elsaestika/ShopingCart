<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    function show(){
        $data['admin'] = Admin::all();
        return view('admin',$data);
    }

    function add(){
        $data = [
            'action' => url ('admin/create'),
            'tombol' => 'simpan',
            'admin' =>(object)[
                'tipe_user' => '',
                'nama' =>'',
                'email'=>'',
                'password' => '',
                'no_hp' =>'',
                'alamat' =>''
            ]
        ];
        return view('form_admin', $data);
    }

    function create(Request $request){
        Admin::create([
            'tipe_user'=> $request->tipe_user,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'foto' => $request->file('foto')->store('foto'),
        ]);
    return redirect('admin');
    }

    function hapus(){
        Admin::where('id', $id)->delete();
        return redirect('admin');
    }
}
