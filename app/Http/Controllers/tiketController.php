<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\tiket;
use Illuminate\Http\Request;
use Session;

class tiketController extends Controller
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
            $tiket = tiket::where('namaPesawat', 'LIKE', "%$keyword%")
				->orWhere('asal', 'LIKE', "%$keyword%")
				->orWhere('tujuan', 'LIKE', "%$keyword%")
				->orWhere('berangkat', 'LIKE', "%$keyword%")
				->orWhere('tiba', 'LIKE', "%$keyword%")
				->orWhere('harga', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $tiket = tiket::paginate($perPage);
        }

        return view('tiket.index', compact('tiket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('tiket.create');
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
        
        tiket::create($requestData);

        Session::flash('flash_message', 'tiket added!');

        return redirect('tiket');
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
        $tiket = tiket::findOrFail($id);

        return view('tiket.show', compact('tiket'));
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
        $tiket = tiket::findOrFail($id);

        return view('tiket.edit', compact('tiket'));
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
        
        $tiket = tiket::findOrFail($id);
        $tiket->update($requestData);

        Session::flash('flash_message', 'tiket updated!');

        return redirect('tiket');
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
        tiket::destroy($id);

        Session::flash('flash_message', 'tiket deleted!');

        return redirect('tiket');
    }
}
