<?php

namespace App\Http\Controllers;

use App\descfaqmodel;
use Illuminate\Http\Request;

class DescfaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $descfaqs = descfaqmodel::all();
        return view('admin/descfaq/index', compact('descfaqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/descfaq/create');
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
            'description' => 'required|max:100',
        ]);
        $descfaq = descfaqmodel::create($storeData);

        return redirect('/descfaqs')->with('message', 'desc faq has been saved!');
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
        $descfaqs = descfaqmodel::findOrFail($id);
        return view('admin/descfaq/update', compact('descfaqs'));
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
            'description' => 'required|max:100'
        ]);
        descfaqmodel::whereId($id)->update($updateData);
        return redirect('/descfaqs')->with('message', 'La descrtpion est bien enregistree');
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
        // descfaqmodel::whereId($id)->update($updateData);
        return redirect('/descfaqs')->with('message', 'La description st bien modifiee');
    }
    public function destroy($id)
    {


        return redirect('/descfaqs')->with('message', 'la description a ete supprime');
    }
}
