<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\driver;
use App\User;
use Illuminate\Http\Request;
use Session;

class driverController extends Controller
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
            $driver = driver::where('nama', 'LIKE', "%$keyword%")
				->orWhere('username', 'LIKE', "%$keyword%")
				->orWhere('email', 'LIKE', "%$keyword%")
				->orWhere('password', 'LIKE', "%$keyword%")
				->orWhere('alamat', 'LIKE', "%$keyword%")
				->orWhere('telfon', 'LIKE', "%$keyword%")
				->orWhere('foto', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $driver = driver::paginate($perPage);
        }

        return view('driver.index', compact('driver'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('driver.create');
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
        
        driver::create($requestData);
        User::create([
            'name'=>$request->nama,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'level'=>'2',
            ]);

        Session::flash('flash_message', 'driver added!');

        return redirect('driver');
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
        $driver = driver::findOrFail($id);

        return view('driver.show', compact('driver'));
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
        $driver = driver::findOrFail($id);

        return view('driver.edit', compact('driver'));
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
        
        $driver = driver::findOrFail($id);
        $driver->update($requestData);

        Session::flash('flash_message', 'driver updated!');

        return redirect('driver');
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
        driver::destroy($id);

        Session::flash('flash_message', 'driver deleted!');

        return redirect('driver');
    }
}
