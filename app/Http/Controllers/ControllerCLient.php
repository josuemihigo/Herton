<?php

namespace App\Http\Controllers;

use App\ClientModele;
use Illuminate\Http\Request;

class ControllerCLient extends Controller
{
    public function index()
    {
        $clients = ClientModele::all();
        return view('admin/client/index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/client/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|numeric',
            'password' => 'required|max:255',
        ]);
        $student = ClientModele::create($storeData);

        return redirect('/clients')->with('completed', 'Student has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clients = ClientModele::findOrFail($id);
        return view('admin/client/update', compact('clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|numeric',
            'password' => 'required|max:255',
        ]);
        ClientModele::whereId($id)->update($updateData);
        return redirect('/clients')->with('completed', 'Student has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update2( $id)
    {
        // $updateData = $request('mame','deleted');
        // ClientModele::whereId($id)->update($updateData);
        return redirect('/clients')->with('completed', 'Student has been updated');
    }
    public function destroy($id)
    {


        return redirect('/clients')->with('completed', 'client has been deleted');
    }
}
