<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class barangsController extends Controller
{
    public function index()
	{
		$barangs = DB::table('barangs')
		->join('kategori','barangs.id_kategori','=','kategori.id')
		->get();
		
		return view('barangs/index',compact('barangs'));
	}	

	public function show()
	{
	$barangs = ['Aqua 115 ML','Minuman Bersoda','Buku Sejarah','Mouse','CPU'];
	return view('barangs/show',compact('barangs'));
	}	
	
	public function store()
	{
		DB::table('barangs')
		->insert([
			'nama' => 'Lampu',
			'id_kategori' => 1,
			'qty' => 14,
			'harga_beli' => 40000,
			'harga_jual' => 60000,
			]);
			
			echo "Date Berhasil Ditambah";
	}
	
	public function update()
	{
		DB::table('barangs')->where('id',3)
		->update([
		'nama' => 'Bola Lampu',
		'qty' => 20,
		'harga_beli' => 45000,
		'harga_jual' => 55000,
		]);
		echo "Data Berhasil Diperbaharui";
	}
	
	public function delete()
	{
		DB::table('barangs')->where('id',3)->delete();
		echo "Data Berhasil Dihapus";
	}
}

