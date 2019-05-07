<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LombaController extends Controller
{
    //
    public function index()
    {
    	$daftar_lomba = \App\Lomba::all();
    	return view('lomba.index',['daftar_lomba'=>$daftar_lomba]);
    }
    public function create(Request $request)
    {
    	\App\Lomba::create($request->all());
    	return redirect('/lomba')->with('success','Data berhasil ditambahkan');
    }

    public function edit($id)
    {
    	$lomba = \App\Lomba::find($id);	
    	return view('lomba.edit',['lomba'=>$lomba]);
    }
    public function update(Request $request,$id)
    {
    	$lomba = \App\Lomba::find($id);	
    	$lomba->update($request->all());
	return redirect('/lomba')->with('success','Data berhasil diubah');

    }
    public function delete($id)
    {
    	$lomba = \App\Lomba::find($id);
    	$lomba->delete($lomba);
		return redirect('/lomba')->with('success','Data berhasil dihapus');

    }
}
