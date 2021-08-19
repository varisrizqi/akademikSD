<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $admin = Admin::where( 'nama', 'LIKE', '%' . $request->search . '%' )->paginate(10);

        return view('admin.dataAdmin.index', compact('admin'));
    }
    
    public function create()
    {        
        return view('admin.dataAdmin.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nuptk' => 'unique:admins,nuptk|numeric|nullable',
            'jenis_kelamin' => 'required',
            'nip' => 'required|unique:admins,nip|numeric',
            'jenis_ptk' => 'required',
            'status_pegawai' => 'required',
            'tugas_tambahan' => '',
        ]);
        
        $validated['password'] = 'password';

        if(Admin::create($validated))
        {
            return redirect(route('dataAdmin'))->with('message', 'data Admin berhasil di tambahkan.');
        }else {
            return redirect('dataAdmin')->with('message', 'data Admin gagal di tambahkan.');
        }
    }
    
    public function show(Admin $admin)
    {
        return view('admin.dataAdmin.show', compact('admin'));
    }
    
    public function edit(Admin $admin)
    {
        return view('admin.dataAdmin.edit', compact('admin') );

    }
    
    public function update(Admin $admin, Request $request)
    {        
        $validated = $request->validate([
            'nama' => 'required',
            'nuptk' => "unique:admins,nuptk,{$admin->id}|numeric|nullable",
            'jenis_kelamin' => 'required',
            'nip' => "required|unique:admins,nip,{$admin->id}|numeric",
            'jenis_ptk' => 'required',
            'status_pegawai' => 'required',
            'tugas_tambahan' => '',            
        ]);

        if($admin->update($validated))
        {
            return redirect(route('dataAdmin'))->with('message', 'data Admin berhasil di update.');
        }else {
            return redirect('dataAdmin')->with('message', 'data Admin gagal di update.');
        }


    }
    
    public function destroy(Admin $admin)
    {
        if($admin->delete())
        {
            return redirect(route('dataAdmin'))->with('message', 'data Admin berhasil di Hapus.');
        }else {
            return redirect('dataAdmin')->with('message', 'data Admin gagal di Hapus.');
        }
        
    }
}
