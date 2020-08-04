<?php

namespace App\Http\Controllers;

use App\Formateurmodel;
use Illuminate\Http\Request;

class FormateurController extends Controller
{
    public function index()
    {
        $formateurs = Formateurmodel::all();
        return view('admin/formateur/index', compact('formateurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/formateur/create');
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
        $student = Formateurmodel::create($storeData);

        return redirect('/formateurs')->with('completed', 'Student has been saved!');
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
        $formateurs = Formateurmodel::findOrFail($id);
        return view('admin/formateur/update', compact('formateurs'));
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
        Formateurmodel::whereId($id)->update($updateData);
        return redirect('/formateurs')->with('completed', 'formateur has been updated');
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
        // Formateurmodel::whereId($id)->update($updateData);
        return redirect('/formateurs')->with('completed', 'formateur has been updated');
    }
    public function destroy($id)
    {


        return redirect('/formateurs')->with('completed', 'formateur has been deleted');
    }
}
