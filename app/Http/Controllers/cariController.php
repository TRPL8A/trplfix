<?php namespace App\Http\Controllers;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cari;
use Illuminate\Http\Request;
use Input;
 
class CariController extends Controller {
 
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
 
	return view('homepage');
 
	}
	public function getTiket()
	{
		$input = Input::get('Cari');
		$hasil = \App\tiket::where('asal', 'LIKE', '%'.$input.'%')->get();
		return view('hasilPencarian', compact('hasil'));
	}
}