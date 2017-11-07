<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\mobil;
use Illuminate\Http\Request;
use Session;

class mobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $mobil = mobil::where('jenisMobil', 'LIKE', "%$keyword%")
				->orWhere('plat', 'LIKE', "%$keyword%")
				->orWhere('jumlahKursi', 'LIKE', "%$keyword%")
				->orWhere('status', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $mobil = mobil::paginate($perPage);
        }

        return view('mobil.index', compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        mobil::create($requestData);

        Session::flash('flash_message', 'mobil added!');

        return redirect('mobil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $mobil = mobil::findOrFail($id);

        return view('mobil.show', compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $mobil = mobil::findOrFail($id);

        return view('mobil.edit', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $mobil = mobil::findOrFail($id);
        $mobil->update($requestData);

        Session::flash('flash_message', 'mobil updated!');

        return redirect('mobil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        mobil::destroy($id);

        Session::flash('flash_message', 'mobil deleted!');

        return redirect('mobil');
    }
}
